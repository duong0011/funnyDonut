<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Product;
use App\Models\index_model;
use App\Models\userModel;
class PushProduct extends Controller
{
	private $db;
	private $data;
	public function __construct()
	{
		helper(['form', 'link']);
        $this->model = new index_model();
        $this->userModel = new userModel();
		$this->db = new Product();
	}
	public function index()
	{
		$this->data = [];
		if(session()->get('loged_user') === null) {
        	return redirect()->to(base_url().'/login');  
        }
        else $this->data['user'] = $this->model->getInfoUser(session()->get('loged_user'));
		return view('pushProduct', $this->data);
	}
	public function addToDB()
	{
		if($this->request->getMethod()=='post') {
			if(isset($_FILES['files']['name']))
				return $this->response->setJSON(['result' => $_POST]);
		}
	}
}