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
		return view('shoppingCart', $this->data);
	}
	public function fetch() {
		$sellerID = $this->request->getVar('sellerID');
		$builder = new Product();
		
	}
}