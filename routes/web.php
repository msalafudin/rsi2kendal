<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('main-page.home');
})->name('home');

Route::get('/indikatormutu', function () {
    return view('main-page.indikatormutu');
})->name('indikatormutu');

Route::get('/login-app', function () {
    return view('main-page.login');
})->name('login-app');

Route::get('/kamar-online', [PublicController::class, 'kamar'])->name('kamar');

Route::middleware(['auth'])->group(function () {
    Route::get('/kamar', [DashboardController::class, 'index'])->name('kamar');
    Route::post('/list_datakamar', [DashboardController::class, 'showUpdate'])->name('list_datakamar');
    Route::post('/kamar/update_kamar', [DashboardController::class, 'update']);
    Route::post('/kamar/add_kamar', [DashboardController::class, 'store']);
    Route::post('/kamar/delete_kamar', [DashboardController::class, 'deleteData']);
});

Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/logout', [LoginController::class, 'vlogout'])->name('logout');
