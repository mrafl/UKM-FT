<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Services;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UkmController extends Controller
{
    public function index($slug)
    {
        $type = $slug == "ormawa" ? TAB_ORMAWA : TAB_OPMAWA;
        $result = Services::getUkm($type);
        return view("admins.ukm.index", [
            "title" => Str::title($slug),
            "tab" => TAB_UKM,
            "subTab" => $type,
            "data" => $result["data"],
            "type" => $type
        ]);
    }

    public function store(Request $request)
    {
        $logo = $request->file("logo");
        Services::addUkm($request->except("_token"), $logo);
        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $logo = $request->file("logo");
        Services::editUkm($id, $request->except("_token"), $logo);
        return redirect()->back();
    }

    public function destroy($id)
    {
        Services::deleteUkm($id);
        return redirect()->back();
    }
}
