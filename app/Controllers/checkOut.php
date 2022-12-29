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
class checkout extends Controller
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
        
		return view('checkout', $this->data);
	}
	public function fetch()
	{
		if($this->request->getMethod() == 'post') {
			$shoppingcart = new CartShopping();
			$tmp = array();
			$user = session()->get('loged_user');
			foreach ($_POST['itemSelected'] as $it) array_push($tmp, $it);
			
			$items = $shoppingcart->whereIn('id' , $tmp)->get()->getResultArray();
			$output = array();
			$sum = 0;
			foreach ($items as $item) {
				$__special = "''";
				$__special__ = "'$1'";
				$__product = new Product();
				$product = $__product->getWhere(['pid' => $item['productid']])->getRowArray();
				$price =$product['price']-$product['price']*$product['discount']/100;
				$shop = new userModel();
				$shopName = $shop->getWhere(['unitid' => $product['owner']])->getRowArray()['fullname'];
				$html = '<div class="col l-12 product-shop-item">
                            <div class="row">
                                <div class="col l-2 product-img">
                                    <img src="data:image/jpeg;base64,'.$product['image'].'" alt="">
                                </div>
                                <div class="col l-2 product-name">
                                    <span>'.$product['nameproduct'].'</span>
                                </div>

                                <div class="product__name--shop col l-2">
                                    <span>'.$shopName.'</span>
                                </div>

                                <div class="product-size col l-1">
                                    <span>'.$item['size'].' cm</span>
                                </div>
                                <div class="col l-2 product-unit-price">'.round($price, 2).'$</div>
                                <div class="col l-1 product-amount">'.$item['quantity'].'</div>
                                <div class="col l-2 product-total">'.round($item['quantity']*$price, 2).' $</div>
                            </div>
                        </div>';
                $sum+= $price*$item['quantity'];
                array_push($output, $html);
			}
			if(sizeof($output)) {
				$data['output'] = $output;
				$data['sum'] = round($sum, 2);
				return $this->response->setJSON($data);
			}
			echo 1;	
		}
	}
	public function paymentMethod()
	{
		if($this->request->getMethod() == 'post') {
			$cardModel = new CreditCard();
			$card = $cardModel->getWhere(['unitid' => session()->get('loged_user')])->getResultArray();
			if(count($card)) {
				$output = '<label class="">
	                <input type="radio" name="radio-method" id="input-card" value = "Card">
	                Card
	            </label>
	            <div class="card-select" style="width:200px; margin: 15px 15px 0;">
	                <select onchange=fetchCard() id = "card-selected">';
	            foreach ($card as $value) {
	            	$output .='<option value="'.$value['id'].'">'.$value['card_number'].'</option>';
	            }
	            
	            $output .='</select>
	            </div>
	            <div class="containercreditcard">
	                
	            </div>';
	            $data['html'] = $output;
	            $data['case'] = 2;
	            return $this->response->setJSON($data);
	        }
		}
	}
	public function fetchCard()
	{
		if($this->request->getMethod() == 'post') {
			$cardModel = new CreditCard();
			$card = $cardModel->getWhere(['unitid' => session()->get('loged_user'), 'id' => $_POST['cardID']])->getRowArray();
			echo '<div class="card-container row">
                    <div class="cc-font col l-5">
                        <span class="chip"></span>
                        <span class="nubank-logo"></span>
                        <div class="logo">
                            <svg version="1.1" id="visa" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                width="47.834px" height="47.834px" viewBox="0 0 47.834 47.834" style="enable-background:new 0 0 47.834 47.834;">
                                <g>
                                    <g>
                                        <path d="M44.688,16.814h-3.004c-0.933,0-1.627,0.254-2.037,1.184l-5.773,13.074h4.083c0,0,0.666-1.758,0.817-2.143
                                         c0.447,0,4.414,0.006,4.979,0.006c0.116,0.498,0.474,2.137,0.474,2.137h3.607L44.688,16.814z M39.893,26.01
                                         c0.32-0.819,1.549-3.987,1.549-3.987c-0.021,0.039,0.317-0.825,0.518-1.362l0.262,1.23c0,0,0.745,3.406,0.901,4.119H39.893z
                                         M34.146,26.404c-0.028,2.963-2.684,4.875-6.771,4.875c-1.743-0.018-3.422-0.361-4.332-0.76l0.547-3.193l0.501,0.228
                                         c1.277,0.532,2.104,0.747,3.661,0.747c1.117,0,2.313-0.438,2.325-1.393c0.007-0.625-0.501-1.07-2.016-1.77
                                         c-1.476-0.683-3.43-1.827-3.405-3.876c0.021-2.773,2.729-4.708,6.571-4.708c1.506,0,2.713,0.31,3.483,0.599l-0.526,3.092
                                         l-0.351-0.165c-0.716-0.288-1.638-0.566-2.91-0.546c-1.522,0-2.228,0.634-2.228,1.227c-0.008,0.668,0.824,1.108,2.184,1.77
                                         C33.126,23.546,34.163,24.783,34.146,26.404z M0,16.962l0.05-0.286h6.028c0.813,0.031,1.468,0.29,1.694,1.159l1.311,6.304
                                         C7.795,20.842,4.691,18.099,0,16.962z M17.581,16.812l-6.123,14.239l-4.114,0.007L3.862,19.161
                                         c2.503,1.602,4.635,4.144,5.386,5.914l0.406,1.469l3.808-9.729L17.581,16.812L17.581,16.812z M19.153,16.8h3.89L20.61,31.066
                                         h-3.888L19.153,16.8z"/>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <div class="number">'.$card['card_number'].'</div>
                        <div class="info row">
                            <div class="info-name col l-6">
                                <span class="card-holder">CARD HOLDER</span>
                                <span class="card-holder-name">'.$card['card_holder'].'</span>
                            </div>
                            <div class="info-date col l-6">
                                <span class="expires">EXPIRES</span>
                                <span class="cc-date">'.$card['date'].'</span>
                            </div>
                        </div>
                    </div> 
                </div>';
		}
		
	}
	public function addOrder()
	{
		if($this->request->getMethod() == 'post') {
			$_tmp = $_POST;
			$_tmp['unitid'] = session()->get('loged_user');
			$order = new OrderedItem();
			$order->save($_tmp);
			$data['orderID'] = $order->insertID;
			$cart = new CartShopping();
			$orderContent = new OrderContent();
			$products = new Product();
			foreach ($_tmp['item'] as $item) { 
				$product = $cart->getWhere(['id' => $item])->getRowArray();				
				$t = $products->getWhere(['pid' => $product['productid']])->getRowArray();
				$data['productid'] = $product['productid'];
				$data['size'] = $product['size'];
				$data['quantity'] = $product['quantity'];
				$data['total'] = round($product['quantity']*($t['price']-$t['price']*$t['discount']/100), 2);
				$data['seller'] = $t['owner'];
				$data['buyer'] = session()->get('loged_user');
				$orderContent->save($data);
				$products->set(['sold' => $t['sold']+$product['quantity']]);
				$products->where('pid', $product['productid'])->update(); 
			}
		}
	}

}