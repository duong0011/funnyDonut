<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\index_model;
use App\Models\userModel;
use App\Models\CreditCard;
use App\Models\addressUserModel;
class Profile extends Controller
{
	private $model;
    protected $data;
    private $userModel;
	public function __construct()
    {
        helper(['form', 'link']);
        $this->model = new index_model();
        $this->userModel = new userModel();
    }
	public function index()
	{
		 if(!session()->has('loged_user')) {
        	return redirect()->to(base_url().'/login');
        }
        else $this->data['user'] = $this->model->getInfoUser(session()->get('loged_user'));
		return view('profile', $this->data);
	}
	public function updateData()
	{
		
		if($this->request->getMethod() == "post") {
			$unitid = session()->get('loged_user');
			if(isset($_FILES['file']['name'])) {
				if(!empty($_FILES['file']['name'])) {
					$hex = base64_encode(file_get_contents($_FILES['file']['tmp_name']));
					$this->userModel->set(['avatar' => $hex]);
					$this->userModel->where('unitid', $unitid)->update();
				}
			}
			$data = [
				'fullname' => $this->request->getPost('fullname'),
				'gender' => $this->request->getPost('gender'),
				'DateOfBirth' => $this->request->getPost('DateOfBirth'),
				'city' => $_POST['city'],
				'specificaddress' => $_POST['specificaddress'],
				'phonenumber' => $_POST['phonenumber']
			];
			foreach($data as $value) {
				if(!$value) return false;
			}
			$this->userModel->set($data);
			$this->userModel->where('unitid',$unitid)->update();
			return $this->response->setJSON(['test' => $data]);	
		}
	}
	public function updatePassword()
	{
		if($this->request->getMethod() == 'post') { 
			$currentPass = $this->request->getPost('currentpass');
			$newpass = $this->request->getPost('newpass');
			$unitid = session()->get('loged_user');
			if($this->userModel->select('status')->where('unitid', $unitid)->get()->getRowArray()['status'] = 'social_user') {
				 return $this->response->setJSON(['smg' => 'You loged by google account so you can\'t change password']);
			}
			$password = $this->userModel->select('password')->where('unitid', $unitid)->get()->getRowArray();
			if(!password_verify($currentPass, $password['password'])) {
				return $this->response->setJSON(['smg' => 'Incorrect password']);
			}
			$this->userModel->set(['password' => password_hash($newpass, PASSWORD_DEFAULT)]);
			$this->userModel->select('password')->where('unitid', $unitid)->update();
			if($this->userModel->affectedRows()) return $this->response->setJSON(['smg' => 'Change password successfully!']);
		}
	}
	public function addAddress()
	{
		$builder = new addressUserModel();
		if($this->request->getMethod() == 'post') {
			$unitid = session()->get('loged_user');
			$data = [
				'name' => $this->request->getPost('name', FILTER_UNSAFE_RAW),
				'phonenumber' => $this->request->getPost('phonenumber', FILTER_UNSAFE_RAW),
				'address' => $this->request->getPost('address', FILTER_UNSAFE_RAW),
				'unitid' => $unitid
			];
			$builder->save($data);
			return $this->response->setJSON(['smg'=> 'Successfully!']);
		}
	}
	public function fetchAdress()
	{
		$builder = new addressUserModel();
		$unitid = session()->get('loged_user');
		$result = $builder->where('unitid', $unitid)->get()->getResultArray();
		return $this->response->setJSON(['result' => $result]);
	}
	public function deleteAddress()
	{
		if($this->request->getMethod() == 'post') {
			$id = $this->request->getVar('aid');
			$builder = new addressUserModel();
			$builder->where('aid', $id)->delete();
		}
	}
	public function saveCreditCard()
	{
		if($this->request->getMethod() == 'post') {
			$_POST['unitid'] = session()->get('loged_user');
			$card = new CreditCard();
			if(strlen($_POST['card_number']) == 20 && strlen($_POST['ccv']) == 3) {
				if($card->where('card_number', $_POST['card_number'])->countAllResults() == 0){
					$card->save($_POST);
					echo 1;
					return;
				}
				echo 0;
			}

		}
	}
	public function fetchCard()	
	{
		if($this->request->getMethod() == 'post') {
			$card = new CreditCard();
			$output = array();
			foreach ($card->getWhere(['unitid' => session()->get('loged_user')])->getResultArray() as $value) {
				$html = '<div class="card-container row">
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
                                        <div class="number">'.$value['card_number'].'</div>
                                        <div class="info row">
                                            <div class="info-name col l-6">
                                                <span class="card-holder">CARD HOLDER</span>
                                                <span class="card-holder-name">'.$value['card_holder'].'</span>
                                            </div>
                                            <div class="info-date col l-6">
                                                <span class="expires">EXPIRES</span>
                                                <span class="cc-date">'.$value['date'].'</span>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="cc-back col l-5">
                                        <div class="black"></div>
                                        <p>CVV</p>
                                        <div class="cvv-input">
                                            <input type="text" value = "'.$value['ccv'].'">
                                        </div>
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
                                    </div>
                                    <div class="icon-del">
                                        <i class="fa-solid fa-trash-can" onclick=deleteCard('.$value['id'].')></i>
                                    </div>
                                </div>';
				array_push($output, $html);
			}
			return $this->response->setJSON($output);
		}
	}
	public function deleteCard($id)
	{
		$card = new CreditCard();
		if($card->where(['unitid' => session()->get('loged_user'), 'id' => $id])->countAllResults(false) && $this->request->getMethod() == 'post')
			$card->delete();
	}
}