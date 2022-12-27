<?php

namespace App\Controllers;
use App\Models\index_model;
use App\Models\userModel;
use App\Models\Product;
use App\Models\followtable;
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
        $this->data['output'] = $this->model->_product($this->data['products']);
        return $this->response->setJSON($this->data);
    }
    public function showByRequset($attribute = '', $method = "")
    {
        $type = $this->request->getVar('type');
        $address = $this->request->getVar('address');
        $star = $this->request->getVar('star');
        $minprice = $this->request->getVar('minprice');
        $maxprice = $this->request->getVar('maxprice');
        $keyWord = $this->request->getVar('keyword');
        if($minprice == 0 && $maxprice == 0) {
            $minprice = 0;
            $maxprice = PHP_INT_MAX;
        }
       
        $result = $this->model->getProductByQuery($type, $address, $star, $minprice, $maxprice);
        $result = $this->model->sortQuery($result, $attribute, $method);

        
        if($keyWord){
            $result = $this->model->getByKeyword($result,$keyWord);
            $userModel = new userModel();
            $shop = $userModel->like('fullname', $keyWord)->get()->getResultArray();
            if(count($shop)) {
                $indedx = 0;
                foreach ($shop as $value) {
                    $products = new Product();
                    $product = $products->getWhere(['owner'=>$value['unitid']])->getResultArray();
                    if(count($product)){
                        if($indedx > 2) break;
                        $sum = 0;
                        foreach ($product as $key) {
                            $sum+= $key['rating'];
                        }
                        $followtable = new followtable();
                        $follower =  count($followtable->getWhere(['shop' => $value['unitid']])->getResultArray());
                        $follow =  count($followtable->getWhere(['follower' => $value['unitid']])->getResultArray());
                        $shopFoud[$indedx] = '<div class="home-search__result-shop">
                            <div class="home__shop-img">
                                <img src="data:image/jpeg;base64,'.$value['avatar'].'" alt="">
                            </div>
                            <div class="home-search__result-shop-info">
                                <h2 class="shop__name">'.$value['fullname'].'</h2>
                                <div class="home__shop-info">
                                    <span class="home__shop-info-quantity--follower"> 
                                        <p class="shop__info-quantity--follower">'.$follower.'</p>Followers
                                    </span>
                                    <span>
                                        <p class="shop__info-quantity--follow">'.$follow.'</p>Follow
                                    </span>
                                </div>
                                <a href = "viewshop?sellerID='.$value['unitid'].'"><button class="magazin__info-btn" style="min-width: 200px; margin-top: 10px;">
                                    <i class="magazin__info-btn-icon fa-solid fa-shop"></i>
                                    <span class="magazin__info-btn-label">View Shop</span>
                                </button></a>
                            </div>
                            <div class="home-search__result-shop--description">
                                <span class="shop__quantity-product">'.count($product).'</span>
                                <p>products</p>
                            </div>
                            <div class="home-search__result-shop--description">
                                <span class="shop__quantity-rating">'.round($sum/1000, 2).' K</span>
                                <p>ratings</p>
                            </div>
                            <div class="home-search__result-shop--description" style="width:20%;">
                                <span class="shop__quantity-rating-chat">'.$value['star'].'</span>
                                <p>Star</p>
                            </div>
                            ';
                    $indedx++;
                    }
                }
                if(isset($shopFoud)) $this->data['shop'] = $shopFoud;
            }
        }
        $gotData = $this->getDataIndex($result);
        $this->data['products'] = $result->countAllResults(false) ?  $gotData  : null;
        $this->data['output'] = $this->model->_product($this->data['products']);
        $this->data['test'] = $star;
        return $this->response->setJSON($this->data);
    }
    
    public function getDataIndex($result)
    {
        $this->data['currentRequest1'] = base_url('/home').'?'.$_SERVER['QUERY_STRING'];
        $this->data['currentRequest'] = base_url(uri_string()).'?';
        $builder = $result;
        $_count = $builder->countAllResults(false);
        $page = $this->request->getVar('page') ? $this->request->getVar('page') : 1;
        $this->data['pageStart']  = $page;
        $this->data['pageEnd'] = ceil($_count/15);
        if($this->data['pageStart'] > $this->data['pageEnd'] && $this->data['pageEnd']) return "fail";
        return $_count ? $this->model->getDataByPage($result, $page) : null;
    }
    public function showHints(){
        $name = $this->request->getVar('productName');
        $result=$this->model->hints($name);
        $count = $result->countAllResults(false);
        $this->data['hints'] = $count ? $result->get(5)->getResultArray() : null;
        return $this->response->setJSON($this->data);
    }
}
