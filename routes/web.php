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

Route::resource('users', UserController::class);
Route::resource('admin', AdminController::class);

Route::get('/', function () {
    return view('welcome');
});

Route::get('register', function () {
    return view('register_login');
});

Route::get('users', function () {
    return view('users.users');
});

Route::get('admin', function () {
    return view('admin.admin');
});
