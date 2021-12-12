<?php

namespace App\Http\Controllers;

use App\Helpers\Services;

class UKMController extends Controller
{
    public function ormawa()
    {
        $data = Services::getUkm(TAB_ORMAWA);
        return view('list-ukm', [
            "title" => "List UKM",
            "data" => $data['data'],
            "subTitle" => "Ormawa"
        ]);
    }

    public function opmawa()
    {
        $data = Services::getUkm(TAB_OPMAWA);
        return view('list-ukm', [
            "title" => "List UKM",
            "data" => $data['data'],
            "subTitle" => "Opmawa"
        ]);
    }
}
