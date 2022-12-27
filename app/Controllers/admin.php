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
class admin extends Controller
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
        	$this->data['user'] = $user->select('fullname, avatar, phonenumber, city, specificaddress, username')->getWhere(['unitid' => session()->get('loged_user')])->getRowArray();

        	if($this->data['user']['username'] != 'admin1') return redirect()->to(base_url().'/home');
        }else {
        	return redirect()->to(base_url().'/login');
        }
		return view('admin', $this->data);
	}
	public function fetchUser($keyWord)
	{
		if($this->request->getMethod() == "post") {
			$user = new userModel();
			$output = array();
			if($keyWord == '!') $request1 =  $user->get()->getResultArray(); 
			else $request1 = $user->like('username', $keyWord)->get()->getResultArray();
			
			foreach($request1 as $value) {
				$block = "Unblock";
				if(!$value['block']) $block = 'Block';
				$date = date_create($value['updated_at']);
				if($value['status'] == 'social_user') $value['username'] = "Google User";
				$html = '<div class="user-info">
                        <span class="user-link"><a href="viewshop?sellerID='.$value['unitid'].'">Link profile</a></span>
                        <span class="user-id">'.$value['uid'].'</span>
                        <span class="user-fullname">'.$value['fullname'].'</span>
                        <span class="user-username">'.$value['username'].'</span>
                        <span class="user-gender">'.$value['gender'].'</span>
                        <span class="user-date-of-birth">'.$value['uid'].'</span>
                        <span class="user-email">'.$value['uid'].'</span>
                        <span class="user-phonenumber">'.$value['DateOfBirth'].'</span>
                        <span class="user-date-created">'.date_format($date,'d-m-Y').'</span>
                        <span class="user-reported">'.$value['reported'].'</span>
                        <span class="action block">'.$block.'</span>
                    </div>';
				array_push($output, $html);
			}
			return $this->response->setJSON($output);
		}
		
	}
	public function fetchProduct($keyWord )
	{
		if($this->request->getMethod() == "post") {
			$user = new Product();
			$output = array();
			$t = new userModel();
			if($keyWord == '!') $request =  $user->get()->getResultArray(); 
			else $request = $user->like('nameproduct', $keyWord)->get()->getResultArray();
			
			foreach($request as $value) {
				$date = date_create($value['updated_at']);
				$html = '<div class="product-info">
                        <span class="user-link"><a href="showproduct?id='.$value['pid'].'">Link product</a></span>
                        <span class="product-id">'.$value['pid'].'</span>
                        <span class="product-name">'.$value['nameproduct'].'</span>
                        <span class="product-price">'.$value['price'].'$</span>
                        <span class="product-type">'.$value['type'].'</span>
                        <span class="product-amount">'.$value['amount'].'</span>
                        <span class="product-seller"><a href="">'.$t->getWhere(['unitid' => $value['owner']])->getRowArray()['fullname'].'</a></span>
                        <span class="product-date-created">'.date_format($date,'d-m-Y').'</span>
                        <span class="product-reported">'.$value['reported'].'</span>
                        <span class="action block">Delete</span>
                    </div>';
				array_push($output, $html);
			}
			return $this->response->setJSON($output);
		}
		
	}
}