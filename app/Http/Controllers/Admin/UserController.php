<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Services;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = Services::user();
        $result = Services::getAdmins();
        return view("admins.users.index", [
            "title" => "Admin",
            "tab" => TAB_ADMIN,
            "data" => $result["data"],
            "user" => $user
        ]);
    }

    public function store(Request $request)
    {
        $photo = $request->file("photo");
        Services::addAdmin($request->except("_token"), $photo);
        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $photo = $request->file("photo");
        $payload = [];
        foreach ($request->except("_token") as $key => $value) {
            if ($value != null) $payload[$key] = $value;
        }
        Services::editAdmin($id, $payload, $photo);
        return redirect()->back();
    }

    public function destroy($id)
    {
        Services::deleteAdmin($id);
        return redirect()->back();
    }
}
