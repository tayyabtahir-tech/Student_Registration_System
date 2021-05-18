<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

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

Route::get('/index', function () {
    return view('index');
});

Route::get('/logout', function () {
	Session::forget('user');
    return view('index');
});

// Route::view('login',"login");
Route::view("enroll","enroll");
Route::post("submit",[UserController::class,"submit"]);
Route::post("login",[AdminController::class,"login"]);
Route::get('home',[AdminController::class,"home"]);
