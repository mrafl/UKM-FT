<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Http;

class Services
{

    private static function post($endpoint, $data = [], $file = null)
    {
        if ($file != null ) {
            $filename = uniqid() . "." . $file['file']->clientExtension();
            return Http::attach($file["key"], $file["file"]->get(), $filename)
                ->withHeaders(authHeader())
                ->post(env("BACKEND_URL") . $endpoint, $data)
                ->json();
        }
        return Http::withHeaders(authHeader())
            ->post(env("BACKEND_URL") . $endpoint, $data)
            ->json();
    }

    private static function get($endpoint, $data = [])
    {
        return Http::withHeaders(authHeader())
            ->get(env("BACKEND_URL") . $endpoint, $data)
            ->json();
    }

    public static function login($email, $password)
    {
        return self::post("auth/login", [
            "email" => $email,
            "password" => $password
        ]);
    }

    public static function logout()
    {
        return self::get("auth/logout", []);
    }

    public static function addUser($name, $email, $password, $photo)
    {
        return self::post("auth/register", []);
    }

    public static function getUkm($type)
    {
        return self::get("ukms", ["type" => $type]);
    }

    public static function addUkm($args, $logo)
    {
        return self::post("ukms", $args, [
            "key" => "logo",
            "file" => $logo
        ]);
    }

    public static function editUkm($id, $args, $logo=null)
    {
        if ($logo != null) return self::post("ukms/$id/edit", $args, [
            "key" => "logo",
            "file" => $logo
        ]);
        else return self::post("ukms/$id/edit", $args);
    }

    public static function deleteUkm($id)
    {
        return self::post("ukms/$id/delete");
    }
}
