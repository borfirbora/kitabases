<?php

namespace App\Model;

use codeigniter\Model;

class BooksModel extends Model
{
    protected $table = "books";
    protected $primaryKey = "id";
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $allowedFields = [
        'id',
        'title',
        'description',
        'author',
        'bookCategoryId',
        'classId',
        'memberId',
        'format',
        'path',
    ];

    protected $useTimestamps = false;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    //protected $deletedField  = 'deleted_at';
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;

}