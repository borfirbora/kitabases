<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $detailsModel = model("DetailsModel");
        $data = [
            "title" => "Anasayfa",
            "d" => $detailsModel->headerFooter()
        ];
        return view('template/Head', $data)
            . view('template/Header')
            . view("Home")
            . view('template/Footer')
            . view("template/Foot");
    }

    public function hakkimizda()
    {
        $detailsModel = model(("DetailsModel"));

        $data = [
            "title" => "Hakkımızda",
            "text" => $detailsModel->headerFooter()["hakkımızda"],
            "d" => $detailsModel->headerFooter()
        ];
        return view('template/Head', $data)
            . view('template/Header')
            . view("Hakkimizda")
            . view('template/Footer')
            . view("template/Foot");
    }

    public function kvkk()
    {
        $detailsModel = model("DetailsModel");

        $data = [
            "title" => "Kişisel Verilerin Korunması",
            "text" => $detailsModel->headerFooter()["kvkk"],
            "d" => $detailsModel->headerFooter()
        ];
        return view('template/Head', $data)
            . view('template/Header')
            . view("KVKK")
            . view('template/Footer')
            . view("template/Foot");
    }

    public function uyeliksozlesmesi()
    {
        $detailsModel = model("DetailsModel");
        $data = [
            "title" => "Üyelik Sözleşmesi",
            "text" => $detailsModel->where("label", "üyelik sözleşmesi")->findColumn("description")[0],
            "d" => $detailsModel->headerFooter()
        ];
        return view('template/Head', $data)
            . view('template/Header')
            . view("UyelikSozlesmesi")
            . view('template/Footer')
            . view("template/Foot");
    }

    public function iletisim()
    {
        $detailsModel = model("DetailsModel");

        $data = [
            "title" => "İletişim",
            "text" => $detailsModel->headerFooter()["iletişim"],
            "d" => $detailsModel->headerFooter()
        ];
        return view('template/Head', $data)
            . view('template/Header')
            . view("iletisim")
            . view('template/Footer')
            . view("template/Foot");
    }
}