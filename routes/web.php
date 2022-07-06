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
Route::get('label', [App\Http\Controllers\users\LabelController::class, 'index'])->name('label');
Route::get('about', [App\Http\Controllers\users\AboutController::class, 'index'])->name('about');
Route::get('contact', [App\Http\Controllers\users\ContactController::class, 'index'])->name('contact');
Route::get('home', [App\Http\Controllers\users\HomeController::class, 'index'])->name('home');
Route::get('privacy', [App\Http\Controllers\users\PrivacyController::class, 'index'])->name('privacy');
