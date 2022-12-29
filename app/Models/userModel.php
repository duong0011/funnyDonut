<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'user_of_shop';
    protected $primaryKey = 'uid';

    protected $returnType = 'array';
    //protected $useSoftDeletes = true;

    protected $allowedFields = ['fullname','username','password','email','phonenumber', 'unitid', 'status', 'avatar', 'gender', 'DateOfBirth', 'login_time', 'logout_time', 'currentstatus','city', 'specificaddress', 'star', 'block'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    //protected $deletedField  = 'deleted_at';

    // protected $validationRules    = [];
    // protected $validationMessages = [];
    // protected $skipValidation     = false;
    
}