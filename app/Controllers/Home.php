<?php

namespace App\Controllers;
<<<<<<< HEAD

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
=======
use App\Models\index_model;

class Home extends BaseController
{
    private $model;
    public function __construct()
    {
        $this->model = new index_model();
    }
    public function index()
    {   
        $data = [];
        if(session()->has('loged_user')) {
            $data = $this->model->getInfoUser(session()->get('loged_user'));
        }
        return view('welcome_message', $data);
    }
    
>>>>>>> 6472ee85aa62242c71ae22d6e751b0934c5906cd
}
