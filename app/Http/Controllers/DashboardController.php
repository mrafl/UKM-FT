<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\Services;

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
