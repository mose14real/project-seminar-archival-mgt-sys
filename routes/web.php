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

Route::resource('students', StudentController::class);
Route::resource('admin', AdminController::class);

Route::get('/', function () {
    return view('welcome');
});

Route::get('register', function () {
    return view('register_login');
});

<<<<<<< HEAD
Route::get('/project-details', function () {
    return view('project_details');
});

Route::get('/users', function () {
    return view('users.users');
});

Route::get('/admin', function () {
=======
Route::get('users', function () {
    return view('users.users');
});

Route::get('admin', function () {
>>>>>>> 5a42f7206cf8a6bf6a37ccbb477dde88e285ddad
    return view('admin.admin');
});
