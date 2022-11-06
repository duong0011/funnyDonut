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
        $this->userModel = new userModel();
	}
	public function index() {
		if(!isset($_GET['sellerID'])) return redirect()->to('Home');
		$sellerID = $this->request->getVar('sellerID');
		$this->data['seller'] = $this->userModel->select('avatar, fullname')->getWhere(['unitid' => $sellerID])->getRowArray();
		$model = new index_model();
		if(session()->has('loged_user')) {
        	$this->data['user'] = $model->getInfoUser(session()->get('loged_user'));
        }
		return view('viewshop', $this->data);
	}
	public function fetch() {
		$sellerID = $this->request->getVar('sellerID');
		$builder = new Product();
		
	}
}