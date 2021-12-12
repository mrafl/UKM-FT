<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UKMController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [DashboardController::class, 'index'])->name("index");
Route::get('/abouts', [DashboardController::class, 'abouts'])->name("abouts");
Route::get('/list-ukm', [DashboardController::class, 'listUKM'])->name("listUKM");

Route::prefix('opmawa')->group(function () {
    Route::get('/{slug?}', [UKMController::class, 'opmawa'])->name("opmawa")->defaults('slug', '');
});

Route::prefix('ormawa')->group(function () {
    Route::get('/{slug?}', [UKMController::class, 'ormawa'])->name("ormawa")->defaults('slug', 'default');
});
