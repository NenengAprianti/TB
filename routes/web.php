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
Route::get('/admin', 'AdminController@index');
Route::get('/admin/dosen', 'dosenController@index');
Route::get('/admin/mahasiswa', 'MahasiswaController@index');
