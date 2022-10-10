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
        $this->data['menuAddress'] = $this->model->getMenuAddress();
        $this->data['menuType'] = $this->model->getMenuType();
        if(session()->has('loged_user')) {
            $this->data['user'] = $this->model->getInfoUser(session()->get('loged_user'));
        }
       
        
    }
    public function index()
    {   
        $this->data['products'] = $this->model->getProduct();
        if($this->request->getMethod() == 'get') {
            $type = $this->request->getVar('type');
            $address = $this->request->getVar('address');
            $minprice = $this->request->getVar('minprice');
            $maxprice = $this->request->getVar('maxprice');
            $this->data['validation'] = Null; 
            if($minprice && $maxprice) {
                $rules = [
                    'maxprice' => [
                        'rules' =>'greater_than['.$minprice.']',
                        'errors' => [
                            'greater_than'=>'Please enter the appropriate price',
                            
                        ]
                    ]
                ];
                if(!$this->validate($rules)) {
                    $this->data['validation'] = $this->validator;
                    return view('welcome_message', $this->data);
                }
            }
            $this->data['products'] = $this->model->getProductByQuery($type, $address, $minprice, $maxprice)->get()->getResultArray();
        }
        
        return view('welcome_message', $this->data);
    }
    public function sortBy($attribute, $method = "ASC")  
    {
         $this->data['products'] = $this->model->getProduct();
         if($this->request->getMethod() == 'get') {
            $type = $this->request->getVar('type');
            $address = $this->request->getVar('address');
            $minprice = $this->request->getVar('minprice');
            $maxprice = $this->request->getVar('maxprice');
            $this->data['validation'] = Null; 
            if($minprice && $maxprice) {
                $rules = [
                    'maxprice' => [
                        'rules' =>'greater_than['.$minprice.']',
                        'errors' => [
                            'greater_than'=>'Please enter the appropriate price',
                            
                        ]
                    ]
                ];
                if(!$this->validate($rules)) {
                    $this->data['validation'] = $this->validator;
                    return view('welcome_message', $this->data);
                }
            }
            $this->data['products'] = $this->model->getProductByQuery($type, $address, $minprice, $maxprice);
        }
        $this->data['products'] = $this->model->sortQuery($this->data['products'], $attribute, $method)->get()->getResultArray();
        return view('welcome_message', $this->data);
    }
    
}
