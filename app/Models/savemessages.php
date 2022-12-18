<?php namespace App\Models;

use CodeIgniter\Model;

class savemessages extends Model
{
    protected $table      = 'messages';
    protected $primaryKey = 'idmess';

    protected $returnType = 'array';

  
    protected $createdField  = 'created_at';

    protected $allowedFields = ['idsend', 'idget', 'msg', 'img'];

}