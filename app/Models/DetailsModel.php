<?php

namespace App\Model;

use CodeIgniter\Model;

class DetailsModel extends Model
{
    protected $table = "details";
    protected $primaryKey = "id";
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $allowedFields = [
        'label',
        'description',
    ];

    protected $useTimestamps = false;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    //protected $deletedField  = 'deleted_at';
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;

    public function headerFooter()
    {
$data = [
    "hakkımızda" => $this->where("label","hakkımızda")->findColumn("description")[0],
    "iletişim" => $this->where("label","iletişim")->findColumn("description")[0],
    "kvkk" => $this->where("label","kvkk")->findColumn("description")[0],
    "copyright" => $this->where("label","copyright")->findColumn("description")[0],
];return $data;
    }
}