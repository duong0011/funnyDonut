<?php namespace App\Models;

use CodeIgniter\Model;

class OrderedItem extends Model
{
    protected $table      = 'product_ordered';
    protected $primaryKey = 'id';

    protected $returnType = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['unitid', 'note', 'total', 'receiver', 'address', 'method','number_card'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
   

    // protected $validationRules    = [];
    // protected $validationMessages = [];
    // protected $skipValidation     = false;
}