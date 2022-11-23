<?php

use App\Http\Controllers\CarsController;
use App\Http\Controllers\WrestlersController;
use App\Http\Controllers\KennyOmegaController;
use App\Http\Controllers\PacController;
use Illuminate\Support\Facades\Auth;
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

// Laravel home page
Route::get('/', function () {
    return view('welcome');
});

// Cars home page
Route::resource('/cars', CarsController::class);

Auth::routes();

// Login home page
Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
