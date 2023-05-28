<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::get('/register', [AuthController::class, 'firstRg'])->name('firstRg');
    //post
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
    Route::post('/register', [AuthController::class, 'firstRegist'])->name('firstRegist');
});

//auth group
Route::group(['middleware' => 'auth'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/add-user', [AuthController::class, 'register'])->name('register');
    Route::post('/add-user', [AuthController::class, 'registerPost'])->name('register');
});

Route::get('/master-data', function () {
    return view('master-data/index');
});

Route::get('/master-data/cost', function () {
    return view('master-data/cost');
});

Route::get('/coba', function () {
    return view('dashboard/coba');
});

Route::get('/scoring', function () {
    return view('scoring/scoring');
});

Route::get('/scoring/single', function () {
    return view('scoring/single');
});
