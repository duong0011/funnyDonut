<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\index_model;
class Profile extends Controller
{
	 private $model;
    protected $data;
	public function __construct()
    {
        helper(['form', 'link']);
        $this->model = new index_model();
        if(session()->has('loged_user')) {
            $this->data['user'] = $this->model->getInfoUser(session()->get('loged_user'));
        }  
    }
	public function index()
	{
		if(!session('loged_user')) return redirect()->to(base_url().'/login');
		return view('profile', $this->data);
	}
}