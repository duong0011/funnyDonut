<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\userModel;
use App\Models\index_model;
use App\Models\Product;
use App\Models\saveIMGProduct;
use App\Models\comment;
use App\Models\CartShopping;
use App\Models\imgComment;
use App\Models\Favorite;
use App\Models\report;
class showproduct extends Controller
{
	private $data;
	private $userModel;
	public function __construct()
	{
       $this->userModel = new userModel();
       $this->Product = new Product();	
	}
	public function index() {
		$this->data = [];
		$model = new index_model();
		$IMGproduct = new saveIMGProduct();
		if(session()->has('loged_user')) {
        	$this->data['user'] = $model->getInfoUser(session()->get('loged_user'));
        }
        $pid = $_GET['id'];
        $product_builder = new Product();
        $product_got = $product_builder->where('pid', $pid)->get()->getRowArray();
        $this->data['seller'] = $this->userModel->select('avatar, fullname, login_time, logout_time, currentstatus, unitid, city, specificaddress')->getWhere(['unitid'=>$product_got['owner']])->getRowArray();
        $this->data['img_product'] = $IMGproduct->where('pid', $pid)->get()->getResultArray();
        $this->data['dataproduct'] = $this->Product->getWhere(['pid' => $pid])->getRowArray();
        $this->data['user'] = $model->getInfoUser(session()->get('loged_user'));
		return view('product', $this->data);
	}
	public function comment()
	{
		if($this->request->getMethod() == 'post'){
			if(!isset($_FILES['files']['tmp_name']) && $_POST['content'] == null) return;
			$comment = new comment();
			$rating = $this->Product->select('rating, star')->getWhere(['pid' => $_POST['productid']])->getRowArray();
			$star = round(($rating['star']*$rating['rating']+$_POST['star'])/($rating['rating']+1), 1);
			$this->Product->set(['star' => $star, 'rating' => $rating['rating']+1]);
			$this->Product->where('pid', $_POST['productid'])->update();
			$_POST['unitid'] = session()->get('loged_user');
			$comment->save($_POST);
			if(isset($_FILES['files']['name'])) {
				$id = $comment->insertID;
				$imgComment = new imgComment();
				foreach ($_FILES['files']['name'] as $key => $value) {
					$data = [
						'commentID' => $id,
						'img' => base64_encode(file_get_contents($_FILES['files']['tmp_name'][$key]))
					];
					$imgComment->save($data);
				}
			}
			echo $this->Product->select('rating, star')->getWhere(['pid' => $_POST['productid']])->getRowArray()['star'];
		}
		
	}
	public function fetchComment($id, $star = 0)		
	{
		if($this->request->getMethod() == 'post') {
			$string  = "'none'";     
            $comment = new comment();
            if($star == 0)
            	$commentSent = $comment->where(['productid' => $id])->orderBy('id', 'DESC')->get()->getResultArray();
            else $commentSent = $comment->where(['productid' => $id, 'star' => $star])->get()->getResultArray();
            $index = 0;
            $output = array();
           	foreach ($commentSent as  $value) {
           		$user = $this->userModel->select('fullname, avatar')->getWhere(['unitid' => $value['unitid']])->getRowArray();
           		$output[$index] ='<div class="row sm-gutter product__background"
                    style="border-bottom: 1px solid rgba(153, 153, 153, 0.3); padding-top: 10px;">
                    <div class="col l-1">
                        <div class="product__rating-avatar">
                            <img src="data:image/jpeg;base64,'.$user['avatar'].'"
                                alt="">
                        </div>
                    </div>
                    <div class="col l-11">
                        <div class="product__rating-info">
                            <div class="product__rating-info--name">
                                <p>'.$user['fullname'].'</p>
                            </div>
                            <div class="product__rating-item" style="display;">
                            	<div class="product__rating-item-star">';
                for ($i=0; $i < $value['star']; $i++) { 
                	$output[$index] .= '<i class="star-checked far fa-star"></i>';
                }
                $output[$index] .= '  </div>
                            </div>

                            <div class="product__rating-date">
                                <span style="font-size: 1.4rem; color: rgb(193, 193, 193); margin:10px 0 10px;">
                                    '.date_format(date_create($value['created_at']), 'd-M-Y').'</span>
                            </div>

                            <div class="Product__rating-label">
                                <span>
                                    '.$value['content'].'
                                </span>
                            </div>

                        </div>
                        <div class="product__rating--images" style="margin-bottom: 10px;">'; 
                        
                $imgComment = new imgComment();
                $img = $imgComment->getWhere(['commentID' => $value['id']])->getResultArray();
                foreach ($img as $image) {
                	$output[$index].='
                       	<div class="product__rating--image">
                            <img src="data:image/jpeg;base64,'.$image['img'].'" alt="" onclick="myFunction(this, '.$index.');">
                        </div>';
                }


                $output[$index] .='
                </div>
                <div class="fullImageComment" style="margin-bottom: 10px;">
                             <span onclick="this.parentElement.style.display='.$string.' "class="closebtn">&times;</span>
                             <img id="expandedImg'.$index.'" style="width:35%">
                            
                         </div>
                     </div>
                 </div>';
                $index++;
           	}

		}
	 	$starComment = $comment->select('star')->getWhere(['productid'=> $id])->getResultArray();
	    $_star = [1 => 0, 2=> 0, 3=>0, 4=>0, 5=>0];
	    foreach ($starComment as $star) {
	    	$_star[$star['star']]++;
	    }
		$data['output'] = $output;
		$data['stars'] = $_star;
		return $this->response->setJSON($data);
		
	}
	public function addtoCart()
	{
		if($this->request->getMethod() == 'post') {
			$CartShopping = new CartShopping();
			$tmp_post = $_POST;
			$product = $CartShopping->where(['unitid' => $tmp_post['unitid'], 'productid' => $tmp_post['productid'], 'size' => $tmp_post['size']]);
			if(!$product->countAllResults(false)) $CartShopping->save($tmp_post);
			else {
				$tmp_post['quantity'] += $product->get()->getRowArray()['quantity'];
				$product->set($tmp_post);
				$product->where(['unitid' => $tmp_post['unitid'], 'productid' => $tmp_post['productid'], 'size' => $tmp_post['size']])->update();
			}
		}
	}
	public function loadCartShopping()
	{
		if($this->request->getMethod() == 'post') {
			$CartShopping = new CartShopping();
			$cart = $CartShopping->getWhere(['unitid' => session()->get('loged_user')])->getResultArray();
			$index = 0;
			foreach ($cart as $value) {
				$product = $this->Product->getWhere(['pid' => $value['productid']])->getRowArray();
				$output[$index] = '
				
				<li class="header__cart-item">
					<a href = "showproduct?id='.$product['pid'].'">
		                <img src="data:image/jpeg;base64,'.$product['image'].'" class="header__cart-item-img">
		                <div class="header__cart-item-info">
		                    <div class="header__cart-item-heading">
		                        <h3 class="header__cart-item-name">'.$product['nameproduct'].'('.$value['size'].' cm)</h3>
		                        <p class="header__cart-item-price">'.round($product['price']-$product['price']*$product['discount']/100, 2).'$</p>
		                    </div>
	                </a>
	                    <div class="header__cart-item-body">
	                        <p class="header__cart-item-number">x '.$value['quantity'].'</p>
	                        <div class="header__cart-item-close" onclick = deteleCartShopping('.$value['id'].')>
	                            Delete
	                            <i class="fas fa-times"></i>
	                        </div>
	                    </div>
	                </div>
	            </li>';
	            $index++;
			}
		}
		if(isset($output)) return $this->response->setJSON($output);
		else return null;
	}
	public function deteleCartShopping()
	{
		if($this->request->getMethod() == 'post') {
			$tmp_post = $_POST;
			$CartShopping = new CartShopping();
			$CartShopping->where('id', $tmp_post['id'])->delete();
		}
	}
	public function like()
	{
		if($this->request->getMethod()=='post') {
			$tmp_post = $_POST;
			$favorite = new Favorite();
			$tmp = $this->Product->getWhere(['pid'=> $tmp_post['productid']])->getRowArray()['favorite'];
			$tmp_post['unitid'] = session()->get('loged_user');
			if(count($favorite->getWhere($tmp_post)->getResultArray()) == 0) {
				$this->Product->set(['favorite' => $tmp+1]);
				$this->Product->where('pid', $tmp_post['productid'])->update();
				$favorite->save($tmp_post);
			} else {
				$favorite->where($tmp_post)->delete();
				$this->Product->set(['favorite' => $tmp-1]);
				$this->Product->where('pid', $tmp_post['productid'])->update();
			}
			
		}
	}
	public function numberOfLikes()
	{
		if($this->request->getMethod()=='get') {
			$tmp_post = $_GET;
			$favorite = new Favorite();
			$tmp = $this->Product->getWhere(['pid'=> $tmp_post['productid']])->getRowArray()['favorite'];
			$tmp_post['unitid'] = session()->get('loged_user');
			$answer['like'] = true;
			if(count($favorite->getWhere($tmp_post)->getResultArray()) == 0) {
				$answer['like'] = false;
			}
			$answer['numberOfLikes'] = $favorite->where(['productid'=>$tmp_post['productid']])->countAllResults();
			return $this->response->setJSON($answer);
		}
	}
	public function report()
	{
		if($this->request->getMethod()=='post') {
			$product = new Product();
			$ur = session()->get('logged_user');
			$p = $_POST['id'];
			
			$t = $product->getWhere(['pid'=>$p])->getRowArray();
			$product->set(['reported'=> $t['reported']+1]);
			$product->where('pid',$p)->update();
		}
	}
}