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
    public function getProductByQuery($type, $address, $minprice, $maxprice)
    {
        $builder = $this->db->table('product');
        if($address) $builder->whereIn('address', $address);

        if($type) $builder->whereIn('type', $type);
        if($minprice && $maxprice) {
            $builder->where('price >=', $minprice)->where('price <=', $maxprice);
            return $builder;

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
}