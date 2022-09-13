<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\users\DashboardController;
use App\Http\Controllers\users\HomeController;
use App\Http\Controllers\users\HousingController;
use App\Http\Controllers\users\RenterController;
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

    //admin dashboard
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    //housings crud
    Route::name('housing.')->prefix('housing/')->group(function (){
        Route::get('/', [HousingController::class, 'index'])->name('index');
        Route::get('/show/{housing}', [HousingController::class, 'show'])->name('show');
        Route::get('/create', [HousingController::class, 'create'])->name('create');
        Route::get('/store', [HousingController::class, 'store'])->name('store');
        Route::get('/edit/{housing}', [HousingController::class, 'edit'])->name('edit');
        Route::get('/update/{housing}', [HousingController::class, 'update'])->name('update');
        Route::get('/destroy/{housing}', [HousingController::class, 'destroy'])->name('destroy');
    });

    //housings crud
    Route::name('renters.')->prefix('renters/')->group(function (){
        Route::get('/', [RenterController::class, 'index'])->name('index');
        Route::get('/create', [RenterController::class, 'create'])->name('create');
        Route::get('/store', [RenterController::class, 'store'])->name('store');
        Route::get('/edit', [RenterController::class, 'edit'])->name('edit');
        Route::get('/edit', [RenterController::class, 'edit'])->name('edit');
        Route::get('/destroy', [RenterController::class, 'destroy'])->name('destroy');
    });
});



Route::get('/', function () {
    return view('home');
});

Route::get('home', [HomeController::class, 'index'])->name('home');
