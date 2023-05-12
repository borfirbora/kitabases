<?php

namespace App\Model;

use codeigniter\Model;

class ClassesModel extends Model
{
    protected $table = "classes";
    protected $primaryKey = "id";
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $allowedFields = [
        'id',
        'classNumber',
        'className',
        'classDescription',
        'classLevel',
    ];

    protected $useTimestamps = false;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    //protected $deletedField  = 'deleted_at';
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;

}