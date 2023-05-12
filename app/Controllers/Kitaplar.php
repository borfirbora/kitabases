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

    public function getEkle($ad,$yazar, $yil)
    {
        return $yazar . " yazarına ait " . $ad . " isimli kitap eklendi. Kitabın yılı: " . $yil;
    }
}