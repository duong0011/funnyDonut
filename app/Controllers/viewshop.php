<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\userModel;
use App\Models\index_model;
use App\Models\Product;
use App\Models\savemessages;
class Viewshop extends Controller
{
	private $data;
	private $userModel;
	public function __construct()
	{
		$this->data = [];
		$this->model = new index_model();
        $this->userModel = new userModel();
	}
	public function index() {
		if(!isset($_GET['sellerID'])) return redirect()->to('Home');
		$sellerID = $this->request->getVar('sellerID');
		$this->data['seller'] = $this->userModel->select('avatar, fullname, login_time, logout_time, currentstatus')->getWhere(['unitid' => $sellerID])->getRowArray();
		$model = new index_model();
		if(session()->has('loged_user')) {
        	$this->data['user'] = $model->getInfoUser(session()->get('loged_user'));
        }
		return view('viewshop', $this->data);
	}
	public function fetch() {
		$sellerID = $this->request->getVar('sellerID');
		$builder = new Product();

		$result = $builder->select('pid,nameproduct, price, rating, image, discount, sold')->where(['owner' => $sellerID]);
		$this->data['products'] = $this->getDataIndex($result);;
		return $this->response->setJSON($this->data);	
	}
	public function getDataIndex($result)
    {
        $this->data['currentRequest1'] = base_url('/viewshop').'?'.$_SERVER['QUERY_STRING'];
        $this->data['currentRequest'] = base_url(uri_string()).'?';
        $builder = $result;
        $_count = $builder->countAllResults(false);
        $page = $this->request->getVar('page') ? $this->request->getVar('page') : 1;
        $this->data['pageStart']  = $page;
        $this->data['pageEnd'] = ceil($_count/15);
        if($this->data['pageStart'] > $this->data['pageEnd'] && $this->data['pageEnd']) return "fail";
        return $_count ? $this->model->getDataByPage($result, $page) : null;
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
                            <div class="msg_cotainer_send">
                                '.$value["msg"].'
                                <span class="msg_time_send">'.$_date.'</span>
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
}