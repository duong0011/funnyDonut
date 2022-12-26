<?php namespace App\Models;

use CodeIgniter\Model;

class CreditCard extends Model
{
    protected $table      = 'credit_card';
    protected $primaryKey = 'id';

    protected $returnType = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = ['card_number', 'card_holder', 'ccv', 'unitid', 'date'];

    // protected $useTimestamps = false;
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    // protected $validationRules    = [];
    // protected $validationMessages = [];
    // protected $skipValidation     = false;
}