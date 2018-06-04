<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', 'LoginController@index');

Route::get('/home', 'HomeController@index');

Route::prefix('admin')->group (function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboarad');
  });

Route::get('/admin', 'AdminController@index');
Route::get('/admin/dosen', 'dosenController@index');
Route::get('/admin/mahasiswa', 'MahasiswaController@index');
Route::get('/user', 'UserController@index');
Route::get('/user/matkul', 'MatkulController@index');
Route::get('/user/kurikulum', 'KurikulumController@index');
Route::get('/user/khs', 'KhsController@index');
Route::get('/user/keuangan', 'KeuanganController@index');