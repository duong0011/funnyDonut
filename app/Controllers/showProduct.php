<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\userModel;
use App\Models\index_model;
use App\Models\Product;
use App\Models\saveIMGProduct;
class showproduct extends Controller
{
	private $data;
	private $userModel;
	public function __construct()
	{
       $this->userModel = new userModel();	
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
        $this->data['seller'] = $this->userModel->select('unitid,avatar,fullname')->getWhere(['unitid'=>$product_got['owner']])->getRowArray();
        //print_r($this->data['seller']);
        $this->data['img_product'] = $IMGproduct->where('pid', $pid)->get()->getResultArray();
        $this->data['user'] = $model->getInfoUser(session()->get('loged_user'));
        print_r($product_got);
		//return view('product', $this->data);
	}
}