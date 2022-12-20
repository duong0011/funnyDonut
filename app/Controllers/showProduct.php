<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\userModel;
use App\Models\index_model;
use App\Models\Product;
use App\Models\saveIMGProduct;
use App\Models\comment;
use App\Models\imgComment;
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
	public function comment($value='')
	{
		if($this->request->getMethod() == 'post'){
			if(!isset($_FILES['files']['tmp_name']) && $_POST['content'] == null) return;
			$comment = new comment();
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
		}
		
	}
	public function fetchComment($id, $star = 0)		
	{
		if($this->request->getMethod() == 'get') {
			$string  = "'none'";     
            $comment = new comment();
            if($star == 0)
            	$commentSent = $comment->getWhere(['productid' => $id])->getResultArray();
            else $commentSent = $comment->getWhere(['productid' => $id, 'star' => $star])->getResultArray();
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
		return $this->response->setJSON($output);
	}
}