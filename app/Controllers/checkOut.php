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

}