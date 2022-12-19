<?php namespace App\Models;

use CodeIgniter\Model;

class imgComment extends Model
{
    protected $table      = 'img_comment';
    protected $primaryKey = 'id';

    protected $returnType = 'array';
   

    protected $allowedFields = ['commentID', 'img'];

}