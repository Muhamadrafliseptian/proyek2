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

Route::get('/', function () {
    return view('home');

});
Route::get('/services', function () {
    return view('services');

});
Route::get('/signup', function () {
    return view('signup');

});
Route::get('/signin', function () {
    return view('signin');

});
Route::get('/pesan', function () {
    return view('pesan');

});
Route::get('/dshhome', function () {
    return view('dshhome');

});
Route::get('/pmsn', function () {
    return view('pmsn');

});
//admin
Route::get('/admin', 'App\Http\Controllers\admin@index');
Route::get('/admin/tambah_admin', 'App\Http\Controllers\admin@tambah');
Route::post('/admin/store', 'App\Http\Controllers\admin@store');
Route::get('/admin/edit/{id}', 'App\Http\Controllers\admin@edit');
Route::post('/admin/update', 'App\Http\Controllers\admin@update');
Route::get('/admin/destroy/{id}', 'App\Http\Controllers\admin@destroy');
//user
Route::get('/user', 'App\Http\Controllers\DaftarController@index');
//karyawan
Route::get('/karyawan', 'App\Http\Controllers\karyawan@index');
Route::get('/karyawan/tambah_karyawan', function () {
    return view('partials_dashboard.tambah_karyawan');

});