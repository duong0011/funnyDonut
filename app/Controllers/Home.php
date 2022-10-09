<?php

namespace App\Controllers;
use App\Models\index_model;

class Home extends BaseController
{
    private $model;
    protected $data;
    public function __construct()
    {
        helper('form');
        $this->model = new index_model();
        
    }
    public function index()
    {   
        $this->data['menuAddress'] = $this->model->getMenuAddress();
        $this->data['menuType'] = $this->model->getMenuType();
        if(session()->has('loged_user')) {
            $this->data['user'] = $this->model->getInfoUser(session()->get('loged_user'));
        }
        $this->data['products'] = $this->model->getProduct();
        if($this->request->getMethod() == 'get') {
            $type = $this->request->getVar('type');
            $address = $this->request->getVar('address');
            $minprice = $this->request->getVar('minprice');
            $maxprice = $this->request->getVar('maxprice');
            $this->data['validation'] = Null; 
            
            if($minprice > $maxprice && $maxprice && $minprice){
                session()->set('smg', 'The minprice field must contain a number less than maxprice');
                return view('welcome_message', $this->data);
            }
            $this->data['products'] = $this->model->getProductByQuery($type, $address, $minprice, $maxprice);
        }
        
        return view('welcome_message', $this->data);
    }
    public function sortBy($attribute)  
    {
        return view('login');
    }
    
}
