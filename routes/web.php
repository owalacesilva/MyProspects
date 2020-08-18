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

Route::get('/', 'HomeController@index');
Auth::routes();

Route::get('/admin/login', 'Auth\LoginController@showAdminLoginForm');
Route::get('/users/login', 'Auth\LoginController@showUserLoginForm');
Route::get('/admin/register', 'Auth\RegisterController@showAdminRegisterForm');
Route::get('/users/register', 'Auth\RegisterController@showUserRegisterForm');

Route::post('/admin/login', 'Auth\LoginController@adminLogin')->name('post_admin_login');
Route::post('/users/login', 'Auth\LoginController@userLogin');
Route::post('/admin/register', 'Auth\RegisterController@createAdmin');
Route::post('/users/register', 'Auth\RegisterController@createUser');

// Route::view('/home', 'home')->middleware('auth');
Route::get('/admin', 'AdminController@index')->name('admin_home');
Route::get('/admin/users', 'AdminUsersController@index')->name('admin_users');
Route::get('/admin/contacts', 'AdminContactsController@index')->name('admin_contacts');
Route::get('/admin/users/new', 'AdminCreateUserController@new')->name('admin_new_user');
Route::post('/admin/users', 'AdminCreateUserController@create')->name('admin_create_user');
Route::get('/admin/settings', 'AdminSettingsController@index')->name('admin_settings');
Route::post('/admin/settings/update_whatsapp', 'AdminSettingsController@updateWhatsapp')->name('admin_update_whatsapp');
Route::post('/contacts', 'HomeController@createContact')->name('home_create_contact');
Route::get('/users', 'UserController@index')->name('users_home');
