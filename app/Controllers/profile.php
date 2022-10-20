<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\index_model;
use App\Models\userModel;
use App\Models\addressUserModel;
class Profile extends Controller
{
	private $model;
    protected $data;
    private $userModel;
	public function __construct()
    {
        helper(['form', 'link']);
        $this->model = new index_model();
        $this->userModel = new userModel();
    }
	public function index()
	{
		 if(!session()->has('loged_user')) {
        	return redirect()->to(base_url().'/login');
        }
        else $this->data['user'] = $this->model->getInfoUser(session()->get('loged_user'));
		return view('profile', $this->data);
	}
	public function updateData()
	{
		

		if($this->request->getMethod() == "post") {
			$unitid = session()->get('loged_user');

			if(isset($_FILES['file']['name'])) {
				if(!empty($_FILES['file']['name'])) {
					move_uploaded_file($_FILES['file']['tmp_name'], $_FILES['file']['name']);
					$hex = base64_encode(file_get_contents($_FILES['file']['name']));
					$this->userModel->set(['avatar' => $hex]);
					$this->userModel->where('unitid', $unitid)->update();
				}
			}
			$data = [
				'fullname' => $this->request->getPost('fullname'),
				'gender' => $this->request->getPost('gender'),
				'DateOfBirth' => $this->request->getPost('DateOfBirth')
			];
			foreach($data as $value) {
				if(!$value) return false;
			}
			$this->userModel->set($data);
			$this->userModel->where('unitid',$unitid)->update();
			return $this->response->setJSON(['test' => $data]);	
		}
	}
	public function updatePassword()
	{
		if($this->request->getMethod() == 'post') { 
			$currentPass = $this->request->getPost('currentpass');
			$newpass = $this->request->getPost('newpass');
			$unitid = session()->get('loged_user');
			if($this->userModel->select('status')->where('unitid', $unitid)->get()->getRowArray()['status'] = 'social_user') {
				 return $this->response->setJSON(['smg' => 'You loged by google account so you can\'t change password']);
			}
			$password = $this->userModel->select('password')->where('unitid', $unitid)->get()->getRowArray();
			if(!password_verify($currentPass, $password['password'])) {
				return $this->response->setJSON(['smg' => 'Incorrect password']);
			}
			$this->userModel->set(['password' => password_hash($newpass, PASSWORD_DEFAULT)]);
			$this->userModel->select('password')->where('unitid', $unitid)->update();
			if($this->userModel->affectedRows()) return $this->response->setJSON(['smg' => 'Change password successfully!']);
		}
	}
	public function addAddress()
	{
		$builder = new addressUserModel();
		if($this->request->getMethod() == 'post') {
			$unitid = session()->get('loged_user');
			$data = [
				'name' => $this->request->getPost('name', FILTER_UNSAFE_RAW),
				'phonenumber' => $this->request->getPost('phonenumber', FILTER_UNSAFE_RAW),
				'address' => $this->request->getPost('address', FILTER_UNSAFE_RAW),
				'unitid' => $unitid
			];
			$builder->save($data);
			return $this->response->setJSON(['smg'=> 'Successfully!']);
		}
	}
	public function fetchAdress()
	{
		$builder = new addressUserModel();
		$unitid = session()->get('loged_user');
		$result = $builder->where('unitid', $unitid)->get()->getResultArray();
		return $this->response->setJSON(['result' => $result]);
	}
	public function deleteAddress()
	{
		if($this->request->getMethod() == 'post') {
			$id = $this->request->getVar('aid');
			$builder = new addressUserModel();
			$builder->where('aid', $id)->delete();
		}
	}
}