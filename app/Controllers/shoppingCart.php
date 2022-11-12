<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\userModel;
use App\Models\index_model;
use App\Models\Product;
class shoppingcart extends Controller
{
	private $data;
	private $userModel;
	
	public function index() {
		return view('shoppingCart');
	}
}