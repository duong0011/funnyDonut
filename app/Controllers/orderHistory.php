<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\userModel;
use App\Models\index_model;
use App\Models\Product;
class orderHistory extends Controller
{
	private $data;
	private $userModel;
	public function __construct()
	{
       $this->userModel = new userModel();
       $this->Product = new Product();	
	}
	public function index() {
		$model = new index_model();
		if(session()->has('loged_user')) {
        	$this->data['user'] = $model->getInfoUser(session()->get('loged_user'));
        }
		return view('orderHistory', $this->data);
	}
}