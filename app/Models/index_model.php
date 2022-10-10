<?php namespace App\Models;

use CodeIgniter\Model;

class Index_model extends Model
{
    protected $db;
   	public function __construct()
   	{
   		$this->db = db_connect();
   	}
   	public function getInfoUser($unitid)
   	{
   		$builder = $this->db->table('user_of_shop')->where('unitid', $unitid)->get();
   		return (count($builder->getResultArray()) == 1) ? $builder->getRowArray() : false;
   	}
    public function getProduct()
    {
        
        return $this->db->table('product')->orderBy('sold')->get()->getResultArray();
    }
    public function getMenuType()   
    {
        return $this->db->table('product')->select('type')->distinct()->orderBy('type')->get()->getResultArray();
    }
    public function getMenuAddress()   
    {
        return $this->db->table('product')->select('address')->distinct()->orderBy('address')->get()->getResultArray();
    }   
    public function getProductByQuery($type, $address, $minprice, $maxprice)
    {
        $result = $this->db->table('product');
        if($address)  $result = $result->whereIn('address', $address);
        if($type) $result = $result->whereIn('type', $type);
        if($minprice) $result = $result->where('price >=', $minprice);
        if($maxprice) $result = $result->where('price <=', $maxprice);
        return $result;
    }
    public function sortQuery($data ,$attribute, $method = "ASC")
    {
       return $data->orderBy($attribute, $method);
    }
}