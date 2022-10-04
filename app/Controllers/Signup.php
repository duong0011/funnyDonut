<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Signup extends Controller
{
	public function __construct()
	{
		helper('form');
	}
	public function index()
	{
		$data = [];
		if($this->request->getMethod() == "post") {
			$rules = [
				'username' => [
					'rules' => 'required|alpha_numeric_punct',
					'error' => [
						'required' => 'Yeu cau nhap ten tai khoan',
						'alpha'		=> 'mat khau khong chua ki tu dac biet'
					]

				],
				'pass' => [
					'rules' => 'required|min_length[8]|alpha_numeric_punct',
				],
				'repass' => 'required|matches[pass]'
			];
			if(!$this->validate($rules)){
				$data['validation'] = $this->validator;
			}
		}
		return view('signup-view', $data);
	}
}