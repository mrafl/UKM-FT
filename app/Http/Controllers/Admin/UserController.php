<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view("admins.users.index", [
            "title" => "Admins",
            "tab" => TAB_ADMIN
        ]);
    }
}
