<?php

namespace App\Model;

use codeigniter\Model;

class MembersModel extends Model
{
    protected $table = "members";
    protected $primaryKey = "id";
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $allowedFields = [
        'id',
        'username',
        'password',
        'email',
        'firstName',
        'lastName',
        'blindDocument',
        'memberType',
        'status'
    ];

    protected $useTimestamps = false;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    //protected $deletedField  = 'deleted_at';
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;

}