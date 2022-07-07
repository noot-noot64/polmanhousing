<?php

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

Route::get('/', function () {
    return view('users/home');
});
Route::get('housing', [App\Http\Controllers\users\HousingController::class, 'index'])->name('housing');
Route::get('home', [App\Http\Controllers\users\HomeController::class, 'index'])->name('home');
