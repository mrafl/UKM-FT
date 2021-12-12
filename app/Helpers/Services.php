<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Http;

class Services
{
    public static function login($username, $password)
    {
        return Services::post("auth/login", [
            "username" => $username,
            "password" => $password
        ]);
    }

    public static function post($endpoint, $data = [])
    {
        $headers = [
            "Content-Type" => "Application/json"
        ];
        return Http::withHeaders($headers)->post(env("BACKEND_URL") . $endpoint, $data);
    }

    public static function getGrafikAkreditasiUniversitas()
    {
        return Services::get("akreditasi/fakultas");
    }

    public static function get($endpoint, $data = [])
    {
        $headers = [
            "Content-Type" => "Application/Json"
        ];
        return Http::withHeaders($headers)->get(env("BACKEND_URL") . $endpoint, $data);
    }

    public static function getAkreditasi($akreditas = null, $fakultas = null, $expiry = null)
    {
        $data = [];
        if ($akreditas != null) $data["akreditasi"] = $akreditas;
        if ($fakultas != null) $data["fakultas"] = $fakultas;
        if ($expiry != null) $data["expiry"] = $expiry;

        return Services::get("akreditasi/prodi", $data);
    }

    public static function getRekapAkreditasi($akreditas = null, $fakultas = null, $expiry = null)
    {
        $data = [];
        if ($akreditas != null) $data["akreditasi"] = $akreditas;
        if ($fakultas != null) $data["fakultas"] = $fakultas;
        if ($expiry != null) $data["expiry"] = $expiry;

        return Services::get("akreditasi/counter", $data);
    }

    public static function getCounterRekapAkreditasiMasaBerlaku()
    {
        return Services::get("akreditasi/counter/expiry");
    }

    public static function getDataProdi($kode)
    {
        return Services::get("akreditasi/fakultas/$kode");
    }

    public static function getCounterMahasiswa()
    {
        if (session('role') == 'rektor') {
            return Services::get("mahasiswa/counter");
        } else {
            $kode_fakultas = session('kode_fakultas');
            return Services::get("mahasiswa/counter", [
                "kode_fakultas" => $kode_fakultas
            ]);
        }
    }

    public static function getCounterSebaranMahasiswaFakultas()
    {
        return Services::get("mahasiswa/sebaran/fakultas");
    }

    public static function getCounterSebaranMahasiswaProdi($kode_fakultas)
    {
        return Services::get("mahasiswa/sebaran/prodi/" . $kode_fakultas);
    }

    public static function getSDMKualifikasi()
    {
        return Services::get("sdm/kualifikasi");
    }

    public static function getSDMUsia()
    {
        return Services::get("sdm/usia");
    }

    public static function getSDMJabatanFungsional()
    {
        return Services::get("sdm/jabatan/fungsional");
    }

    public static function getSDMGolongan()
    {
        return Services::get("sdm/pangkat/golongan");
    }
}
