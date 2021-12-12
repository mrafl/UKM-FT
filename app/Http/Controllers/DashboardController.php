<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function index()
    {
        return view('home', [
            "title" => "UKM FT"
        ]);
    }

    public function listUKM()
    {
        return view('list-ukm', [
            "title" => "List UKM"
        ]);
    }

    public function abouts()
    {
        return view('list-ukm', [
            "title" => "Tentang Kami"
        ]);
    }
}
