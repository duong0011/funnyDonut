<?php namespace App\Models;

use CodeIgniter\Model;

class AddressUserModel extends Model
{
    protected $table      = 'addressuser';
    protected $primaryKey = 'aid';

    protected $returnType = 'array';
 

    protected $allowedFields = ['address', 'unitid', 'phonenumber', 'name'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
  
}