<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Product;
use App\Models\index_model;
use App\Models\userModel;
use App\Models\saveIMGProduct;
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
		if($this->request->getMethod() =='post') {
			$builder = $this->db;
			$_POST['rating'] = random_int(1000,10000);
			$_POST['sold'] = random_int(1000, 10000);
			
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
			return $this->response->setJSON(['result' =>'Success']);
		}
	}
}