<?php

namespace App\Http\Controllers;

class UKMController extends Controller
{
    public function ormawa()
    {
        return view('list-ukm', [
            "title" => "List UKM"
        ]);
    }

    public function opmawa()
    {
        return view('list-ukm', [
            "title" => "List UKM"
        ]);
    }
}
