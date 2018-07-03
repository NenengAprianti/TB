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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/', 'LoginController@index');

Route::get('/home', 'HomeController@index');
Route::get('/user/logut', 'Auth\LoginController@userLogout')->name('user.logout');



Route::prefix('admin')->group(function () {
Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
Route::get('/', 'AdminController@index')->name('admin.dashboard');
Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

// Password reset routes
  Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
  Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
  Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset');
  Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
});

Route::get('/admin/dosen', 'dosenController@index');
Route::get('/admin/mahasiswa', 'MahasiswaController@index');
Route::get('/admin/matkul', 'MatkulController@index');
Route::get('/user', 'UserController@index');
Route::get('/user/kurikulum', 'KurikulumController@index');
Route::get('/user/khs', 'KhsController@index');
Route::get('/user/keuangan', 'KeuanganController@index');

// Route::prefix('admin')->group(function() {
// Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
// Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
// Route::get('/', 'AdminController@index')->name('admin.dashboarad');
// });

