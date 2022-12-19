<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\userModel;
use App\Models\index_model;
use App\Models\Product;
use App\Models\saveIMGProduct;
use App\Models\comment;
use App\Models\imgComment;
class showproduct extends Controller
{
	private $data;
	private $userModel;
	public function __construct()
	{
       $this->userModel = new userModel();
       $this->Product = new Product();	
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
        $this->data['seller'] = $this->userModel->select('avatar, fullname, login_time, logout_time, currentstatus, unitid, city, specificaddress')->getWhere(['unitid'=>$product_got['owner']])->getRowArray();
        $this->data['img_product'] = $IMGproduct->where('pid', $pid)->get()->getResultArray();
        $this->data['dataproduct'] = $this->Product->getWhere(['pid' => $pid])->getRowArray();
        $this->data['user'] = $model->getInfoUser(session()->get('loged_user'));
		return view('product', $this->data);
	}
	public function comment($value='')
	{
		if($this->request->getMethod() == 'post'){
			if(!isset($_FILES['files']['tmp_name']) && $_POST['content'] == null) return;
			$comment = new comment();
			$_POST['unitid'] = session()->get('loged_user');
			$comment->save($_POST);
			if(isset($_FILES['files']['name'])) {
				$id = $comment->insertID;
				$imgComment = new imgComment();
				foreach ($_FILES['files']['name'] as $key => $value) {
					$data = [
						'commentID' => $id,
						'img' => base64_encode(file_get_contents($_FILES['files']['tmp_name'][$key]))
					];
					$imgComment->save($data);
				}
			}
		}
		
	}
	public function display()
	{
		if($this->request->getMethod() == 'get') {
			$id = $_GET['shop'];
			$data['products'] = $this->db->where(['owner' => $id])->countAllResults();
			date_default_timezone_set('Europe/Moscow');
	        $jointime = date_create($this->userModel->select('created_at')->getWhere(['unitid' => $id])->getRowArray()['created_at']);
	        $data['join'] = max(intval(date_diff(date_create(date("Y-m-d H:s:i")), $jointime)->format('%m')), 1);
			$followtable = new followtable();
			$data['follower'] = $followtable->where(['shop' => $id])->countAllResults();
			$data['rating'] = $this->userModel->getWhere(['unitid' => $id])->getRowArray()['star'];
			$amount = $this->db->getWhere(['owner' => $id])->getResultArray();
			$sum = 0;
			foreach ($amount as $key) {
				$sum+= $key['rating'];
			}
			$data['amountRating'] = round($sum/1000, 2).'K';
			return $this->response->setJSON($data);
		}
	}
}