<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\LoginModel;
class Login extends Controller
{
	private $db;
	private $session;
	public function __construct()
	{	
		$this->session = session();
		$this->db = new LoginModel();
	}
	public function index()
	{
		if(session()->has('loged_user')) {
			return redirect()->to(base_url().'/home');
		}
		$data = [];
		if($this->request->getMethod() == "post") {
			$rules = [
				'username' => [
					'rules' => 'required|min_length[8]',
					
				],
				'password' => [
					'rules' => 'required|min_length[8]',
				]
			];

			if(!$this->validate($rules)) {
				$data['validation'] = $this->validator;
			} else {
				$username = $this->request->getVar('username', FILTER_UNSAFE_RAW);
				$password = $this->request->getVar('password');
				$gdata = $this->db->verifyUsername($username);
				if(!$gdata) {
					$this->session->set('success', 'Username incorect');
					return view('login', $data);
				}
				if($gdata['status'] != 'active') {
					$this->session->set('success', "You haven't activated your account yet! Please check your email for activation!");
					return view('login', $data);
				}
				if(password_verify($password, $gdata['password'])) {
					$this->session->set('loged_user', $gdata['unitid']);
					return redirect()->to(base_url().'/home');
				}
				$this->session->set('success', 'Password incorect');
			}
		}
		return view('login', $data);		
	}
	public function logout()	
	{
		session()->remove('loged_user');
		session()->destroy();
		return redirect()->to(base_url().'/login');
	}
}