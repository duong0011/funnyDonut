<?php namespace App\Models;

use CodeIgniter\Model;
use App\Models\Favorite;
class Index_model extends Model
{
    protected $db;
   	public function __construct()
   	{
   		$this->db = db_connect();
   	}
   	public function getInfoUser($unitid)
   	{
   		$builder = $this->db->table('user_of_shop')->select('fullname, username,email, phonenumber, avatar, gender, DateOfBirth, city, specificaddress')->where('unitid', $unitid)->get();
   		return (count($builder->getResultArray()) == 1) ? $builder->getRowArray() : false;
   	}
    public function getProduct()
    {
        return $this->db->table('product')->orderBy('sold');
    }
    public function getMenuType()   
    {
        return $this->db->table('product')->select('type')->distinct()->orderBy('type')->get()->getResultArray();
    }
    public function getMenuAddress()   
    {
        return $this->db->table('product')->select('address')->distinct()->orderBy('address')->get()->getResultArray();
    }   
    public function getProductByQuery($type, $address, $minprice, $maxprice, $star)
    {
        $builder = $this->db->table('product');
        if($address) $builder->whereIn('address', $address);
        if($type) $builder->whereIn('type', $type);
        if($minprice && $maxprice) {
            $builder->where('price >=', $minprice)->where('price <=', $maxprice);
            return $builder;

        }
        
        if($star) {
            $maxs = 0;
            $mins = 5; 
            foreach ($star as $key) {
                $maxs = max($key, $maxs);
                $mins = min($key, $mins);
            }
            $builder->where(['star <=' => $maxs+0.5, 'star >' => $mins-0.5]);
        }
        if($maxprice) $builder->where('price >=', $minprice);
        if($minprice) $builder->where('price <=', $maxprice);
        return $builder;
    }
    public function sortQuery($data ,$attribute, $method = "ASC")
    {
       return $data->orderBy($attribute, $method);
    }
    public function getDataByPage($data, $page = 1)
    {
        return (($page == 1) ? $data->get(15, ($page-1)*15) : $data->get(15, ($page-1)*15+1))->getResultArray();
    }
    public function hints($name='')
    {
        return $this->db->table('product')->select('nameproduct, pid')->like('nameproduct', $name);
    }
    public function getByKeyword($data,$name)
    {
        return $data->like('nameproduct', $name);
    }
    public function _product($data)
    {   
        if($data == null) return;
        $index =0;
        $favorite = new Favorite();

        foreach ($data as $value) {
            $checker = "";
            if($favorite->where(['unitid' => session()->get('loged_user'), 'productid' => $value['pid']])->countAllResults() != 0) $checker = "checked";
            $output[$index] = "<div class='col l-2-4 home-product-item'>
                            <a class='home-product-item-link' href='showproduct?id=".$value['pid']."'>
                            <div class='home-product-item__img' style='background-image:url(data:image/jpeg;base64,".$value['image'].")'></div>
                            <div class='home-product-item__info'>
                                <h4 class='home-product-item__name'>".$value['nameproduct']."</h4>
                                <div class='home-product-item__price'>
                                    ";
            if($value['discount'] > 0) $output[$index].= "<p class='home-product-item__price-old'>".$value['price']."$</p>";
            $output[$index].="<p class='home-product-item__price-new'>".round(($value['price']-$value['price']*$value['discount']/100), 2)."$</p>
                                    <i class='home-product-item__ship fas fa-shipping-fast'></i>
                                </div>
                                <div class='home-product-item__footer'>
                                    <div class='home-product-item__save'>
                                        <input type='checkbox' name='save-check' id='heart-save' ".$checker." disabled=true>
                                        <label for='heart-save' class='far fa-heart'></label>
                                    </div>
                                    <div class='home-product-item__rating-star'>
                                ";
                                            
            for ($i=1; $i <= round($value['star'],0, PHP_ROUND_HALF_UP) ; $i++) $output[$index].="<i class='star-checked far fa-star'></i>";      
            $output[$index].="
                    </div>
                         <div class='home-product-item__saled'>".$value['rating']."</div>
                    </div>
                    <div class='home-product-item__origin'>Sold(".$value['sold'].")</div>
                </div><a/>
            </div>";
            $index++;
        }
        return $output;
    }
}