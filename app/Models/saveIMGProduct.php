<?php namespace App\Models;

use CodeIgniter\Model;

class SaveIMGProduct extends Model
{
    protected $table      = 'image-of-product';
    protected $primaryKey = 'ipid';

    protected $returnType = 'array';
   
    protected $allowedFields = ['image', 'pid'];

}