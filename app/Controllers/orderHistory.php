<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\userModel;
use App\Models\index_model;
use App\Models\Product;
use App\Models\saveIMGProduct;
use App\Models\comment;
use App\Models\CreditCard;
use App\Models\CartShopping;
use App\Models\imgComment;
use App\Models\OrderedItem;
use App\Models\OrderContent;
class orderHistory extends Controller
{
	private $data;
	private $userModel;
	public function __construct()
	{
       $this->userModel = new userModel();
       $this->Product = new Product();	
	}
	public function index() {
		$model = new index_model();
		if(session()->has('loged_user')) {
        	$user = new userModel();
        	$this->data['user'] = $user->select('fullname, avatar, phonenumber, city, specificaddress')->getWhere(['unitid' => session()->get('loged_user')])->getRowArray();
        }else {
        	return redirect()->to(base_url().'/login');
        }
		return view('orderHistory', $this->data);
	}
	public function fetchBuy()
	{
		if($this->request->getMethod() == "post") {
			$order = new OrderedItem();
			$orderContent = new OrderContent();
			$output = array();
			$products = new Product();
			$user = new userModel();
			$fullname = $user->getWhere(['unitid' => session()->get('loged_user')])->getRowArray()['fullname'];
			foreach ($order->getWhere(['unitid' => session()->get('loged_user')])->getResultArray() as $value) {
				$date = date_create($value['updated_at']);
				$sum = 0;
				$html = ' <div class="Order">
                                <div class="block_order">Order ID: <span>'.$value['id'].'</span></div>
                                <div class="products">
                                    <div class="infor-receiver">
                                        <p class="date-order">Order date: <span>'.date_format($date,'d-m-Y').'</span></p>
                                        <p class="order-receiver">Receiver: <span>'.$fullname.'</span></p>
                                        <p class="order-delivery-addr">Delivery address: <span>'.$value['address'].'</span></p>
                                    </div>';
                foreach ($orderContent->getWhere(['orderID' => $value['id']])->getResultArray() as $val) {
                	$sum+= $val['total'];
                	$product = $products->getWhere(['pid' => $val['productid']])->getRowArray();
                	$html.='
                                    <div class="product">
                                        <div class="product-img ">
                                            <img src="data:image/jpeg;base64,'.$product['image'].'" alt="">
                                        </div>

                                        <div class="product-infor">
                                            <p class="product-name">Product Name: <span>'.$product['nameproduct'].'</span></p>
                                            <p class="product-seller">Seller: <span>'.$user->getWhere(['unitid' => $val['seller']])->getRowArray()['fullname'].'</span></p>
                                            <p class="product-status">Status: <span>Delivering</span></p>
                                            <p class="product-price">Price: 
                                                <span>'.round($product['price']-$product['price']/100*$product['discount'], 2).'$</span> 
                                                
                                            </p> 
                                            <p class="product-quantity">Quantity: 
                                                <span>'.$val['quantity'].'</span>
                                                <span></span>
                                            </p> 
                                            <div class="block-price">
                                                <span>Total: </span>
                                                <span>'.$val['total'].'</span>      
                                            </div> 
                                        </div>                                            
                                    </div>
                                    
                                ';
                }
                $html.='
                                </div>  
                                <div class="block-total-price">
                                    <span>Total: </span>
                                    <span>'.$sum.'$</span>      
                                </div> 
                            </div>';
                
                                        
                      array_push($output, $html);
			}
			return $this->response->setJSON($output);
		}
	}
	public function fetchSell()
	{
		if($this->request->getMethod() == "post") {
			$order = new OrderedItem();
			$orderContent = new OrderContent();
			$output = array();
			$products = new Product();
			$user = new userModel();
			
			$sellerID  = $orderContent->select('seller, orderID')->where(['seller' => session()->get('loged_user')])->distinct()->get()->getResultArray();

			foreach ($sellerID as $value) {
				$infoOrder = $order->getWhere(['id' => $value['orderID']])->getRowArray();
				$date = date_create($infoOrder['updated_at']);
				$sum = 0;
				$fullname = $user->getWhere(['unitid' => $infoOrder['unitid']])->getRowArray()['fullname'];
				$html = ' <div class="Order">
                                <div class="block_order">Order ID: <span>'.$infoOrder['id'].'</span></div>
                                <div class="products">
                                    <div class="infor-receiver">
                                        <p class="date-order">Order date: <span>'.date_format($date,'d-m-Y').'</span></p>
                                        <p class="order-receiver">Receiver: <span>'.$fullname.'</span></p>
                                        <p class="order-delivery-addr">Delivery address: <span>'.$infoOrder['address'].'</span></p>
                                    </div>';
                foreach ($orderContent->getWhere(['orderID' => $value['orderID'], 'seller' => session()->get('loged_user')])->getResultArray() as $val) {
                	$sum+= $val['total'];
                	$product = $products->getWhere(['pid' => $val['productid']])->getRowArray();
                	$html.='
                                    <div class="product">
                                        <div class="product-img ">
                                            <img src="data:image/jpeg;base64,'.$product['image'].'" alt="">
                                        </div>

                                        <div class="product-infor">
                                            <p class="product-name">Product Name: <span>'.$product['nameproduct'].'</span></p>
                                            <p class="product-seller">Seller: <span>'.$user->getWhere(['unitid' => $val['seller']])->getRowArray()['fullname'].'</span></p>
                                            <p class="product-status">Status: <span>Delivering</span></p>
                                            <p class="product-price">Price: 
                                                <span>'.round($product['price']-$product['price']/100*$product['discount'], 2).'$</span> 
                                                
                                            </p> 
                                            <p class="product-quantity">Quantity: 
                                                <span>'.$val['quantity'].'</span>
                                                <span></span>
                                            </p> 
                                            <div class="block-price">
                                                <span>Total: </span>
                                                <span>'.$val['total'].'</span>      
                                            </div> 
                                        </div>                                            
                                    </div>
                                    
                                ';
                }
                $html.='
                                </div>  
                                <div class="block-total-price">
                                    <span>Total: </span>
                                    <span>'.$sum.'$</span>      
                                </div> 
                            </div>';
                
                                        
                      array_push($output, $html);
			}
			return $this->response->setJSON($output);
		}
	}
}