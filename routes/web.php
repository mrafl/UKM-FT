<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\UkmController as AdminUkmController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UKMController;
use App\Http\Controllers\Admin\UkmMemberController;
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

Route::prefix("dashboard")->middleware("auth.no")->group(function () {
    Route::get("login", [AuthController::class, "login"])->name("login");
    Route::post("login", [AuthController::class, "loginAction"])->name("login.action");
});

Route::prefix("dashboard")->middleware("auth.required")->group(function () {
    Route::get("/", [DashboardController::class, "admin"])->name("admin.index");
    Route::get("/logout", [AuthController::class, "logout"])->name("logout");

    Route::get("/admins", [UserController::class, "index"])->name("admin.users");
    Route::post("/admin", [UserController::class, "store"])->name("admin.users.store");
    Route::post("/admin/{id}/edit", [UserController::class, "update"])->name("admin.users.update");
    Route::get("/admin/{id}/delete", [UserController::class, "destroy"])->name("admin.users.destroy");

    Route::get("/ukm/{slug}", [AdminUkmController::class, "index"])->name("admin.ukm");
    Route::post("/ukm", [AdminUkmController::class, "store"])->name("admin.ukm.store");
    Route::post("/ukm/{id}/edit", [AdminUkmController::class, "update"])->name("admin.ukm.update");
    Route::get("/ukm/{id}/delete", [AdminUkmController::class, "destroy"])->name("admin.ukm.destroy");

    Route::get("/ukm/{slug}/members", [UkmMemberController::class, "index"])->name("admin.ukm.member");
    Route::post("/ukm/{id}/member", [UkmMemberController::class, "store"])->name("admin.ukm.member.store");
    Route::post("/ukm/member/{memberId}/edit", [UkmMemberController::class, "update"])->name("admin.ukm.member.update");
    Route::get("/ukm/member/{memberId}/delete", [UkmMemberController::class, "destroy"])->name("admin.ukm.member.destroy");
});
