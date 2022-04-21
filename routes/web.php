<?php

// use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PagesController;

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

Route::resource('/cars', CarsController::class)->name("index","cars")->middleware('auth');



Auth::routes();

// Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Auth::routes();

Route::get('/', function (){
    return view("welcome");
});
Route::get('/dashboard', [HomeController::class, 'index'])->name('home');



