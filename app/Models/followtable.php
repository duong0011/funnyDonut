<?php namespace App\Models;

use CodeIgniter\Model;

class followtable extends Model
{
    protected $table      = 'followtable';
    protected $primaryKey = 'id';

    protected $allowedFields = ['shop', 'follower'];

}