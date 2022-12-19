<?php namespace App\Models;

use CodeIgniter\Model;

class comment extends Model
{
    protected $table      = 'comment';
    protected $primaryKey = 'id';

    protected $returnType = 'array';
  
    protected $allowedFields = ['unitid', 'content', 'star', 'productid'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
  
}