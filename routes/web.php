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

Route::view('/', 'index');
Auth::routes();

Route::get('/admin/login', 'Auth\LoginController@showAdminLoginForm');
Route::get('/users/login', 'Auth\LoginController@showUserLoginForm');
Route::get('/admin/register', 'Auth\RegisterController@showAdminRegisterForm');
Route::get('/users/register', 'Auth\RegisterController@showUserRegisterForm');

Route::post('/admin/login', 'Auth\LoginController@adminLogin');
Route::post('/users/login', 'Auth\LoginController@userLogin');
Route::post('/admin/register', 'Auth\RegisterController@createAdmin');
Route::post('/users/register', 'Auth\RegisterController@createUser');

// Route::view('/home', 'home')->middleware('auth');
Route::get('/admin', 'AdminController@index');
Route::get('/admin/users', 'AdminUsersController@index');
Route::get('/admin/contacts', 'AdminContactsController@index');
Route::get('/users', 'UserController@index');
