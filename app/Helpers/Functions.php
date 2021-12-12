<?php

function template($dir): string
{
    return env('ENGINE') == 'artisan' ? asset($dir) : asset("public/$dir");
}

function attachments($uri): string
{
    return env("BACKEND_URL") . $uri;
}

function token()
{
    $token = session()->get("token", "");
    if ($token === "") return null;
    return $token;
}

function authHeader(): array
{
    $token = token();
    if ($token === null) return ["Content-Type" => "Application/Json"];
    return [
        "Authorization" => "Bearer $token"
    ];
}
