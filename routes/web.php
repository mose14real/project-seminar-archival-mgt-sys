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

Route::resource('student', StudentController::class);
Route::resource('admin', AdminController::class);

Route::get('/', function () {
    return view('index');
});

Route::get('register', function () {
    return view('register');
});

Route::get('login', function () {
    return view('login');
});

Route::get('project-details', function () {
    return view('project_details');
});

Route::get('user', function () {
    return view('student.user');
});

Route::get('admin', function () {
    return view('admin.admin');
});
