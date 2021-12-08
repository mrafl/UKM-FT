<?php

function template($dir)
{
       return env('ENGINE') == 'artisan' ? asset($dir) : asset('public/$dir');
}
