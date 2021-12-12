<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UKMController;
use App\Http\Controllers\Admin\UkmController as AdminUkmController;
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

Route::prefix("dashboard")->middleware("auth.no")->group(function() {
    Route::get("login", [AuthController::class, "login"])->name("login");
    Route::post("login", [AuthController::class, "loginAction"])->name("login.action");
});

Route::prefix("dashboard")->middleware("auth.required")->group(function () {
    Route::get("/", [DashboardController::class, "admin"])->name("admin.index");
    Route::get("/admins", [UserController::class, "index"])->name("admin.users");

    Route::get("/ukm/{slug}", [AdminUkmController::class, "index"])->name("admin.ukm");
    Route::post("/ukm", [AdminUkmController::class, "store"])->name("admin.ukm.store");
    Route::post("/ukm/{id}/edit", [AdminUkmController::class, "update"])->name("admin.ukm.update");
    Route::get("/ukm/{id}/delete", [AdminUkmController::class, "destroy"])->name("admin.ukm.destroy");
});
