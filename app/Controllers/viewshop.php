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
}