<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Auth;

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

Auth::routes(['verify' => true]);


Route::get('/', [IndexController::class, 'showIndex'])->name('index');


//index


//user


//Annonces

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
