<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\users\DashboardController;
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
//login
Route::get('/login', [LoginController::class, 'index'])->name('login');

//auth login
Route::name('auth.')->prefix('auth/')->group(function (){
    Route::post('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});

Route::name('admin.')->prefix('admin/')->group(function (){
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('housing', [App\Http\Controllers\users\HousingController::class, 'index'])->name('housing');
    Route::get('renters', [\App\Http\Controllers\users\RenterController::class, 'index'])->name('renters');
});



Route::get('/', function () {
    return view('home');
});

Route::get('home', [App\Http\Controllers\users\HomeController::class, 'index'])->name('home');
