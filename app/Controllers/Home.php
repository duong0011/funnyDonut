<?php

namespace App\Controllers;
use App\Models\index_model;

class Home extends BaseController
{
    private $model;
    protected $data;
    public function __construct()
    {
        helper(['form', 'link']);
        $this->model = new index_model();
        $this->data['menuAddress'] = $this->model->getMenuAddress();
        $this->data['menuType'] = $this->model->getMenuType();
        if(session()->has('loged_user')) {
            $this->data['user'] = $this->model->getInfoUser(session()->get('loged_user'));
        }
       
        
    }
    public function index()
    {   
        $this->data['products'] = $this->getDataIndex($this->model->getProduct());
        $this->data['validation'] = null;
        return view('welcome_message', $this->data);
    }

    public function sortBy($attribute, $method = "ASC")  
    {
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

        $result = $this->model->sortQuery($this->data['products'], $attribute, $method);
        $this->data['products'] = $this->getDataIndex($result);
        return view('welcome_message', $this->data);
    }
    public function showByRequset()
    {
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
                }
            }
            $result = $this->model->getProductByQuery($type, $address, $minprice, $maxprice);
            
        }
        
        $this->data['products'] = $result->countAllResults(false) ? $this->getDataIndex($result) : null;
        
        return view('welcome_message', $this->data);
    }
    public function getDataIndex($result)
    {
        $builder = $result;
        $_count = $builder->countAllResults(false);
        $page = $this->request->getVar('page') ? $this->request->getVar('page') : 1;
        $this->data['pageStart']  = $page;
        $this->data['pageEnd'] = ceil($_count/15);
        return $_count ? $this->model->getDataByPage($result, $page) : null;
    }
}
