<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\userModel;
use App\Models\index_model;
use App\Models\Product;
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
    	$data = $this->userModel->select('avatar, fullname, login_time, logout_time, currentstatus')->getWhere(['unitid' => $idSeller])->getRowArray();
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
	$output .= "	<div class='d-flex bd-highlight'>
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
                    <span id='action_menu_btn'><i class='fas fa-ellipsis-v'></i></span>
                    <div class='action_menu'>
                        <ul>
                            <li><i class='fa-solid fa-shop'></i>View Shop</li>
                            <li><i class='fas fa-ban'></i> Block</li>
                        </ul>
                    </div>";
		echo $output;
    }
}