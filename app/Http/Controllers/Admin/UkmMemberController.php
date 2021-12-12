<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Services;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UkmMemberController extends Controller
{
    public function index($slug)
    {
        $user = Services::user();
        $ukm = Services::ukmDetail($slug)["data"];
        $result = Services::ukmMembers($ukm['id']);
        return view("admins.ukm.members.index", [
            "title" => "Admin",
            "tab" => TAB_UKM,
            "subTab" => $ukm["type"],
            "data" => $result["data"],
            "user" => $user,
            "ukm" => $ukm
        ]);
    }

    public function store(Request $request)
    {
        $photo = $request->file("photo");
        Services::addUkmMember($request->except("_token"), $photo);
        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $photo = $request->file("photo");
        $payload = [];
        foreach ($request->except("_token") as $key => $value) {
            if ($value != null) $payload[$key] = $value;
        }
        Services::editUkmMember($id, $payload, $photo);
        return redirect()->back();
    }

    public function destroy($id)
    {
        Services::deleteUkmMember($id);
        return redirect()->back();
    }
}
