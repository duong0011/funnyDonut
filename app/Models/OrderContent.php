<?php namespace App\Models;

use CodeIgniter\Model;

class OrderContent extends Model
{
    protected $table      = 'order_content';
    protected $primaryKey = 'id';

    protected $returnType = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = ['orderID', 'productid', 'size', 'quantity', 'total', 'seller', 'buyer'];

    // protected $useTimestamps = false;
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    // protected $validationRules    = [];
    // protected $validationMessages = [];
    // protected $skipValidation     = false;
}