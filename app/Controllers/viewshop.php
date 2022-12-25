<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\userModel;
use App\Models\index_model;
use App\Models\Product;
use App\Models\savemessages;
use App\Models\saveIMGProduct;
use App\Models\followtable;
use App\Models\Favorite;
class Viewshop extends Controller
{
	private $data;
	private $userModel;
	public function __construct()
	{
		$this->data = [];
		$this->model = new index_model();
        $this->userModel = new userModel();
        $this->db = new Product();
	}
	public function index() {
		if(!isset($_GET['sellerID'])) return redirect()->to('Home');
		$sellerID = $this->request->getVar('sellerID');
		$followtable = new followtable();
		$getFollower = $followtable->getWhere(['shop' => $sellerID])->getResultArray();
		$this->data['followerStatus'] = 'Follow';
		foreach ($getFollower as $key) {
			if($key['follower'] == session()->get('loged_user')) $this->data['followerStatus'] = 'Followed';
		}
		$this->data['seller'] = $this->userModel->select('avatar, fullname, login_time, logout_time, currentstatus, unitid')->getWhere(['unitid' => $sellerID])->getRowArray();
		$model = new index_model();
		if(session()->has('loged_user')) {
        	$this->data['user'] = $model->getInfoUser(session()->get('loged_user'));
        }
		return view('viewshop', $this->data);
	}
	public function fetch($attribute = '', $method = "") {
		$sellerID = $this->request->getVar('sellerID');
		$builder = new Product();
		$type = $this->request->getVar('type');
		$this->data['test'] = $type;
		if($type == '')
			$result = $builder->where(['owner' => $sellerID]);
		else $result = $builder->where(['owner' => $sellerID, 'type' => $type]);
		$result = $this->model->sortQuery($result, $attribute, $method);
		$this->data['products'] = $this->getDataIndex($result, $sellerID);;
		return $this->response->setJSON($this->data);	
	}
	private function getDataIndex($result, $sellerID)
    {
        $this->data['currentRequest1'] = base_url('/viewshop').'?'.$_SERVER['QUERY_STRING'];
        $this->data['currentRequest'] = base_url(uri_string()).'?';
        $tmp = $result->get()->getResultArray();
        $_count = count($tmp);
        $page = $this->request->getVar('page') ? $this->request->getVar('page') : 1;
        $this->data['pageStart']  = $page;
        $this->data['pageEnd'] = ceil($_count/15);
        if($this->data['pageStart'] > $this->data['pageEnd'] && $this->data['pageEnd']) return "fail";
        $output = $page == 1 ? array_splice($tmp, 0, 15) : array_splice($tmp, ($page-1)*15, 15);
        return $_count ? $this->_product($output, $sellerID) : null;
    }
    public function boxchat($idSeller)
    {
    	$data = $this->userModel->select('avatar, fullname, login_time, logout_time, currentstatus, unitid')->getWhere(['unitid' => $idSeller])->getRowArray();
    	$output="";
    	$status = $data['currentstatus'] == "online" ? "online_icon" : "online_icon offline";
    	$time = "Online";
    	if($data['currentstatus'] == 'offline') {
    		date_default_timezone_set('Europe/Moscow');
	        $current = new \DateTime();
	        $timelogout = new \DateTime($data['logout_time']);
	        $timelogoutcaculated = explode(',', $current->diff($timelogout, true)->format('%d,%h,%i'));
	        if($timelogoutcaculated[0]) $time = "Offline ".$timelogoutcaculated[0].' days ago';
	        elseif($timelogoutcaculated[1]) $time = "Offline ".$timelogoutcaculated[1].' hours ago';
	        elseif($timelogoutcaculated[2]) $time = "Offline  ".$timelogoutcaculated[2].' minutes ago';
	        else $time =  ' just now';
    	}
	$output .= "<div class='d-flex bd-highlight'>
                        <div class='img_cont'>
                            <img src='data:image/jpeg;base64,".$data['avatar']."' class='rounded-circle user_img'>
                            <span class='".$status."'></span>
                        </div>
                        <div class='user_info'>
                            <span>".$data['fullname']."</span>
                            <p>".$time."</p>
                        </div>
                        <div class='video_cam' style='display:none;'>
                            <span><i class='fas fa-video'></i></span>
                            <span><i class='fas fa-phone'></i></span>
                        </div>
                    </div>
                    ";
		$result['output'] = $output;
		$result['id'] = $data['unitid'];
		return $this->response->setJSON($result);
    }
    public function saveMess()
    {
    	$builder = new savemessages();
    	
    		if(isset($_FILES['files']['name']))
	    	foreach ($_FILES['files']['name'] as $key => $value) {
				$data = [
					'idsend' => $_POST['idsend'],
					'idget' => $_POST['idget'],
					'img' => base64_encode(file_get_contents($_FILES['files']['tmp_name'][$key]))
				];
				$builder->save($data);
			}
    	
    	if($_POST['msg'] == "") return;
    	$builder->save($_POST);
    }
    public function fetchChat()
    {
        $builder = new savemessages();
        $where = "idsend = '{$_POST['sendfrom']}' AND idget = '{$_POST['sendto']}' OR idsend = '{$_POST['sendto']}' AND idget = '{$_POST['sendfrom']}'";
        $result = $builder->getWhere($where)->getResultArray();
        $output = "";
        $avtsend = $this->userModel->select('avatar')->getWhere(['unitid' =>$_POST['sendfrom']])->getRowArray();
        $avtget = $this->userModel->select('avatar')->getWhere(['unitid' => $_POST['sendto']])->getRowArray();
        foreach ($result as  $value) {
        	$date = date_create($value['created_at']);
        	$_date = date_format($date,"d/m/Y H:i");
        	if($value['idsend'] == $_POST['sendfrom']) {
        		
        		if($value['msg'] != "") {
        			$output .= '
        				<div class="d-flex justify-content-end mb-4">
                            <div class="msg_cotainer_send"style="position: relative; max-width: 80%;">
                                '.$value["msg"].'
                                <span class="msg_time_send" style="min-width: 80px;">'.$_date.'</span>
                            </div>
                            <div class="img_cont_msg">
                                <img src="data:image/jpeg;base64,'.$avtsend['avatar'].'" class="rounded-circle user_img_msg">
                            </div>
                        </div>';
                        continue;
        		}
        		$output .='<div class="d-flex justify-content-end mb-4">
                            <div class="msg_cotainer_send">
                                <img src="data:image/jpeg;base64,'.$value['img'].'" alt="">
                                <span class="msg_time_send">'.$_date.'</span>
                            </div>
                            <div class="img_cont_msg">
                                <img src="data:image/jpeg;base64,'.$avtsend['avatar'].'" class="rounded-circle user_img_msg">
                            </div>
                        </div>';
        	}
        	if($value['idsend'] == $_POST['sendto']) {
        		if($value['msg'] != "") {
        			$output .= '
        				<div class="d-flex justify-content-start mb-4">
                            <div class="img_cont_msg">
                                <img src="data:image/jpeg;base64,'.$avtget['avatar'].'" class="rounded-circle user_img_msg">
                            </div>
                            <div class="msg_cotainer">
                                '.$value["msg"].'
                                <span class="msg_time">'.$_date.'</span>
                            </div>
                        </div>';
                        continue;
        		}
        		$output .=' <div class="d-flex justify-content-start mb-4">
                            <div class="img_cont_msg">
                                <img src="data:image/jpeg;base64,'.$avtget['avatar'].'" class="rounded-circle user_img_msg">
                            </div>
                            <div class="msg_cotainer">
                                <img src="data:image/jpeg;base64,'.$value['img'].'">
                                <span class="msg_time">'.$_date.'</span>
                            </div>
                        </div>';
        	}
        }
        echo $output;
    }
    public function loadListcontacts()
    {
    	
    	$builder = new savemessages();
    	$id = $_GET['id'];
    	$output = NULL;
    	$getchatlist = $builder->select('idget')->distinct()->where(['idsend' => $id])->get()->getResultArray();
    	$sendchatlist = $builder->select('idsend')->distinct()->where(['idget' => $id])->get()->getResultArray();
    	$chatlist = $getchatlist+$sendchatlist;
    	foreach ($chatlist as $key) {
    		$data = $this->userModel->select('avatar, fullname, login_time, logout_time, currentstatus, unitid')->getWhere(['unitid' => $key])->getRowArray();
	    	$status = $data['currentstatus'] == "online" ? "online_icon" : "online_icon offline";
	    	$time = "Online";
	    	if($data['currentstatus'] != 'online') {
	    		date_default_timezone_set('Europe/Moscow');
		        $current = new \DateTime();
		        $timelogout = new \DateTime($data['logout_time']);
		        $timelogoutcaculated = explode(',', $current->diff($timelogout, true)->format('%d,%h,%i'));
		        if($timelogoutcaculated[0]) $time = "Offline ".$timelogoutcaculated[0].' days ago';
		        elseif($timelogoutcaculated[1]) $time = "Offline ".$timelogoutcaculated[1].' hours ago';
		        elseif($timelogoutcaculated[2]) $time = "Offline  ".$timelogoutcaculated[2].' minutes ago';
		        else $time =  ' just now';
	    	}

    		$output.='
    		 <li>
	            <div class="d-flex bd-highlight" onclick = loadChat("'.$data['unitid'].'")>
	                <div class="img_cont">
	                    <img src="data:image/jpeg;base64,'.$data['avatar'].'" class="rounded-circle user_img">
	                    <span class="'.$status.'"></span>
	                </div>
	                <div class="user_info-searched">
	                    <span>'.$data['fullname'].'</span>
	                    <p>'.$time.'</p>
	                </div>
	            </div>
	        </li>';
    	}
    	echo $output;
    }
    public function addToDB()
	{
		if($this->request->getMethod() =='post') {
			$builder = $this->db;
			$userID = session()->get('loged_user');
			$address = $this->userModel->select('city')->getWhere(['unitid' => $userID])->getRowArray();
			$_POST['rating'] = 1;
			$_POST['sold'] = 0;
			$_POST['owner'] = session()->get('loged_user');
			$_POST['address'] = $address['city'];
			$builder->save($_POST);
			$id = $builder->insertID;
			$builder->set([
				'image' => base64_encode(file_get_contents($_FILES['files']['tmp_name'][0])),
			]);
			$builder->where('pid', $id)->update();
			$saveIMG = new saveIMGProduct();
			foreach ($_FILES['files']['name'] as $key => $value) {
				$data = [
					'pid' => $id,
					'image' => base64_encode(file_get_contents($_FILES['files']['tmp_name'][$key]))
				];
				$saveIMG->save($data);
			}
			echo "This products had been added!";
		}

	}
	public function addresschecker()
	{
		$userID = session()->get('loged_user');
		$address = $this->userModel->select('city')->getWhere(['unitid' => $userID])->getRowArray();
		if($address['city'] == "") echo 0;
		else echo 1;
	}
	public function addfollower()
	{
		if($this->request->getMethod() == 'post') {
			$sellerID = $this->request->getVar('shop');
			$followtable = new followtable();
			$getFollower = $followtable->getWhere(['shop' => $sellerID])->getResultArray();
			foreach ($getFollower as $key) {
				if($key['follower'] == session()->get('loged_user')){
					$followtable->where(['shop' => $sellerID, 'follower' => $key['follower']])->delete();
					echo 'Follow';
					return;
				}
			}
			$followtable->save(['shop' => $_POST['shop'], 'follower' => session()->get('loged_user')]);
			echo "Followed";
		}
	}
	public function display()
	{
		if($this->request->getMethod() == 'get') {
			$id = $_GET['shop'];
			$data['products'] = count($this->db->getWhere(['owner' => $id])->getResultArray());
			date_default_timezone_set('Europe/Moscow');
	        $jointime = date_create($this->userModel->select('created_at')->getWhere(['unitid' => $id])->getRowArray()['created_at']);
	        $data['join'] = max(intval(date_diff(date_create(date("Y-m-d H:s:i")), $jointime)->format('%m')), 1);
			$followtable = new followtable();
			$data['follower'] = $followtable->where(['shop' => $id])->countAllResults();
			$data['rating'] = $this->userModel->getWhere(['unitid' => $id])->getRowArray()['star'];
			$amount = $this->db->getWhere(['owner' => $id])->getResultArray();
			$sum = 0;
			foreach ($amount as $key) {
				$sum+= $key['rating'];
			}
			$data['amountRating'] = round($sum/1000, 2).'K';
			return $this->response->setJSON($data);
		}
	}
	public function deleteProduct()
	{
		if($this->request->getMethod() == 'post') {
			$product = new Product();
			$product->where(['pid'=> $_POST['id']])->delete();
		}
	}
	private function _product($data, $sellerID)
    {   
        if($data == null) return;
        $index =0;
        $favorite = new Favorite();

        foreach ($data as $value) {
            $checker = "";
            if($favorite->where(['unitid' => session()->get('loged_user'), 'productid' => $value['pid']])->countAllResults() != 0) $checker = "checked";
            $output[$index] = "<div class='col l-2-4 home-product-item'>";
            if($sellerID == session()->get('loged_user')) $output[$index] .= "<div class='edit'>
                                <i class='fa-solid fa-trash-can icon-edit' onclick=delete_(".$value['pid'].")></i>\
                            </div>";
            $output[$index] .="
                            <a class='home-product-item-link' href='showproduct?id=".$value['pid']."'>
                            <div class='home-product-item__img' style='background-image:url(data:image/jpeg;base64,".$value['image'].")'></div>
                            <div class='home-product-item__info'>
                                <h4 class='home-product-item__name'>".$value['nameproduct']."</h4>
                                <div class='home-product-item__price'>
                                    <p class='home-product-item__price-old'>".$value['price']."$</p>
                                    <p class='home-product-item__price-new'>".round(($value['price']-$value['price']*$value['discount']/100), 2)."$</p>
                                    <i class='home-product-item__ship fas fa-shipping-fast'></i>
                                </div>
                                <div class='home-product-item__footer'>
                                    <div class='home-product-item__save'>
                                        <input type='checkbox' name='save-check' id='heart-save' ".$checker." disabled=true>
                                        <label for='heart-save' class='far fa-heart'></label>
                                    </div>
                                    <div class='home-product-item__rating-star'>
                                ";
                                            
            for ($i=0; $i < round($value['star'],0, PHP_ROUND_HALF_UP) ; $i++) $output[$index].="<i class='star-checked far fa-star'></i>";      
            $output[$index].="
                    </div>
                         <div class='home-product-item__saled'>".$value['rating']."</div>
                    </div>
                    <div class='home-product-item__origin'>Sold(".$value['sold'].")</div>
                </div><a/>
            </div>";
   
            $index++;
        }
        return $output;
    }
}