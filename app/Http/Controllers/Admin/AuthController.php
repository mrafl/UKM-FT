<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Services;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view("admins.auth.login");
    }

    public function loginAction(Request $request)
    {
        $email = $request->input("email");
        $password = $request->input("password");
        $result = Services::login($email, $password);
        session()->put("token", $result["data"]["token"]["token"]);
        return redirect()->route("admin.index");
    }
}
