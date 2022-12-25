<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\userModel;
use App\Models\index_model;
use App\Models\Product;
use App\Models\CartShopping;
class shoppingcart extends Controller
{
	private $data;
	private $userModel;
	
	public function index() {
		$model = new index_model();
		if(session()->has('loged_user')) {
        	$this->data['user'] = $model->getInfoUser(session()->get('loged_user'));
        }else {
        	return redirect()->to(base_url().'/login');
        }
		return view('shoppingCart', $this->data);
	}
	public function orderItem()
	{
		if($this->request->getMethod() == "post") {
			$shoppingcart = new CartShopping();
			$user = session()->get('loged_user');
			$items = $shoppingcart->getWhere(['unitid' => $user])->getResultArray();
			$output = array();
			foreach ($items as $item) {
				$__special = "''";
				$__special__ = "'$1'";
				$__product = new Product();
				$product = $__product->getWhere(['pid' => $item['productid']])->getRowArray();
				$price =$product['price']-$product['price']*$product['discount']/100;
				$shop = new userModel();
				$shopName = $shop->getWhere(['unitid' => $product['owner']])->getRowArray()['fullname'];
				$html = '<div class="product-shop row">
                            <div class="input-check">
                                <input type="checkbox" onclick=totalPayment() class = "product-is-selected" value="'.$item['id'].'">
                            </div>
                            <div class="col l-2 product-img">
                                <img src="data:image/jpeg;base64,'.$product['image'].'" alt="">
                            </div>
                            <div class="col l-2 product-name">
                                <span>'.$product['nameproduct'].'</span>
                            </div>
                            <div class="product__name--shop col l-2">
                                <span>'.$shopName.'</span>
                            </div>
                            <div class="product-size col l-1" style="margin-left: 4px;">
                                <span>'.$item['size'].' cm</span>
                            </div>
                            <div class="col l-1 product-unit-price">'. round($price, 2).'$</div>
                            <div class="col l-1 product-amount" style="margin-left: 10px;">
                                <input id="id-product'.$item['id'].'"  type="number" value="'.$item['quantity'].'" min="1" class="amount-number" oninput="this.value = this.value.replace(/[^0-9.]/g, '.$__special.'); this.value = this.value.replace(/(\..*)\./g, '.$__special__.');" onchange=inputChange('.$item['id'].')>
                            </div>
                            <div class="col l-2 product-total id-product'.$item['id'].'" style="color:var(--header-color); margin-left: 10px;">'.round($item['quantity']*$price,2).'$</div>
                            <button  onclick=deteleCartShopping('.$item['id'].') style="padding: 0;border: none;background: none;"><i class="fa-solid fa-trash-can icon-delete" ></i></button>
                        </div>';
                array_push($output, $html);
			}
			if(sizeof($output)) return $this->response->setJSON($output);
			echo 1;	
		}
	}
	public function updateQuantity()
	{
		if($this->request->getMethod() == 'post') {
			$cart = new CartShopping();
			$product = new Product();
			$cart->set(['quantity' => $_POST['quantity']]);
			$cart->where('id', $_POST['id'])->update();
			$tmp_cart = $cart->getWhere(['id'=> $_POST['id']])->getRowArray();
			$__product = new Product();
			$product = $__product->getWhere(['pid' => $tmp_cart['productid']])->getRowArray();
			$price = $product['price']-$product['price']*$product['discount']/100;
			echo round($tmp_cart['quantity']*$price, 2);
		}
	}
	public function totalPayment()
	{
		if($this->request->getMethod() == 'post') {
			if(isset($_POST['products'])){
				$cart = new CartShopping();
				$tmp_cart = $cart->whereIn('id', $_POST['products'])->get()->getResultArray();
				$output = 0;
				foreach ($tmp_cart as $item) {
					$__product = new Product();
					$product = $__product->getWhere(['pid' => $item['productid']])->getRowArray();
					$price = $product['price']-$product['price']*$product['discount']/100;
					$output+= $price*$item['quantity'];
				}
				echo round($output, 2);
			}
			else echo 0;	
		}
	}
	public function telephoneChecker()
	{
		if($this->request->getMethod() == 'post') {
			$user = new userModel();
			$id = session()->get('loged_user');
			$tmp =$user->select('phonenumber, city')->getWhere(['unitid' => $id])->getRowArray();
			if( $tmp['phonenumber'] == "" || $tmp['city'] == "") return "false";
			return "true";
		}
	}
}