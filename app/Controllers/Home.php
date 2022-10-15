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
        return view('welcome_message', $this->data);
    }
    public function fetch()
    {
        $result = $this->model->getProduct();
        $this->data['products'] = $this->getDataIndex($result);
        return $this->response->setJSON($this->data);
    }
    public function sortBy($attribute, $method = "ASC")  
    {
        if($this->request->getMethod() == 'get') {
            $type = $this->request->getVar('type');
            $address = $this->request->getVar('address');
            $minprice = $this->request->getVar('minprice');
            $maxprice = $this->request->getVar('maxprice');
            $this->data['products'] = $this->model->getProductByQuery($type, $address, $minprice, $maxprice);
        }
        $result = $this->model->sortQuery($this->data['products'], $attribute, $method);
        $gotData = $this->getDataIndex($result);
        if($gotData == "fail") return view('errors/html/error_404');
        $this->data['products'] = $result->countAllResults(false) ?  $gotData  : null;
        
        return view('welcome_message', $this->data);
    }
    public function showByRequset()
    {
        
        $type = $this->request->getVar('type');
        $address = $this->request->getVar('address');
        $minprice = $this->request->getVar('minprice');
        $maxprice = $this->request->getVar('maxprice');
        $result = $this->model->getProductByQuery($type, $address, $minprice, $maxprice);
        $gotData = $this->getDataIndex($result);
        if($gotData == "fail") return view('errors/html/error_404');
        $this->data['products'] = $result->countAllResults(false) ?  $gotData  : null;
        return $this->response->setJSON($this->data);
    }
    public function getDataIndex($result)
    {
        $builder = $result;
        $_count = $builder->countAllResults(false);
        $page = $this->request->getVar('page') ? $this->request->getVar('page') : 1;
        $this->data['pageStart']  = $page;
        $this->data['pageEnd'] = ceil($_count/15);
        if($this->data['pageStart'] > $this->data['pageEnd'] && $this->data['pageEnd']) return "fail";
        return $_count ? $this->model->getDataByPage($result, $page) : null;
    }
}
