<?php namespace App\Models;

use CodeIgniter\Model;

class Favorite extends Model
{
    protected $table      = 'favorite';
    protected $primaryKey = 'id';

    protected $returnType = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = ['unitid', 'productid'];

    // protected $useTimestamps = false;
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    // protected $validationRules    = [];
    // protected $validationMessages = [];
    // protected $skipValidation     = false;
}