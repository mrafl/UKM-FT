<?php

function template($dir): string
{
    return env('ENGINE') == 'artisan' ? asset($dir) : asset("public/$dir");
}

function argon($dir): string
{
    return template("argon/$dir");
}
