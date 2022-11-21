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

Route::middleware(['auth', 'auth.session'])->group (function () {
    Route::get('/', function() {
        return view('welcome');
});

    Route::get('/karyawan', 'App\Http\Controllers\C_karyawan@index')->name('karyawan');
    Route::get('/karyawan/create', 'App\Http\Controllers\C_karyawan@create')->name('karyawan.create');
    Route::get('/karyawan/edit/{id}', 'App\Http\Controllers\C_karyawan@edit')->name('karyawan.edit');
});

Route::middleware(['guest'])->group(function (){
    Route::get('/login', 'App\Http\Controllers\C_login@index')->name('login');
    Route::get('/register', 'App\Http\Controllers\C_register@index');
});

Route::post('/karyawan/add', 'App\Http\Controllers\C_karyawan@add')->name('karyawan.add');
Route::post('/karyawan/update', 'App\Http\Controllers\C_karyawan@update')->name('karyawan.update');
Route::delete('/karyawan/delete/{id}', 'App\Http\Controllers\C_karyawan@delete')->name('karyawan.delete');

Route::post('/login', 'App\Http\Controllers\C_login@login');
Route::post('/register', 'App\Http\Controllers\C_register@store');
Route::post('/logout' , 'App\Http\Controllers\C_login@logout');