<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\index_model;
use App\Models\userModel;
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
        if(session()->has('loged_user')) {
            $this->data['user'] = $this->model->getInfoUser(session()->get('loged_user'));
        }
        if(!session('loged_user')) return redirect()->to(base_url().'/login');  
    }
	public function index()
	{
		return view('profile', $this->data);
	}
	public function updateData()
	{
		

		if($this->request->getMethod() == "post") {
			$unitid = session()->get('loged_user');
			if($this->request->getPost('avatar')){

				$gdata['avatar'] = base64_encode(file_get_contents($this->request->getPost('avatar')));
				$this->userModel->update($gdata, 'unitid = '.$unitid);
			}

			$data = [
				'fullname' => $this->request->getPost('fullname'),
				'gender' => $this->request->getPost('gender')
			];
			$this->userModel->set($data);
			$this->userModel->where('unitid',$unitid)->update();	
		}
	}
}