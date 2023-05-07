<?php

namespace App\Controllers;

class Kitaplar extends BaseController
{
    public function getIndex()
    {
        return "malak ";
    }

    public function getDelete($no)
    {
        return $no . " numaralı kitap silindi.";
    }
}