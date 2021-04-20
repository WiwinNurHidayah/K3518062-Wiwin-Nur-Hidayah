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

Route::get('/helloworld', function () {
    return 'Hello world Laravel';
});

Route::get('/nama/{nama}', function ($nama) {
 return "Nama kamu adalah: ".$nama;
});

Route::get('/', 'App\Http\Controllers\Admin@index') -> name('home');
Route::get('/about', 'App\Http\Controllers\Admin@indexnim') -> name('about_k3518062');
Route::get('/create', 'App\Http\Controllers\Admin@create') -> name('create');
Route::post('/create', 'App\Http\Controllers\Admin@store') -> name('store');
Route::get('/edit/{id}','App\Http\Controllers\Admin@edit')->name('edit');
Route::post('/update/{id}','App\Http\Controllers\Admin@update')->name('update');
Route::get('/delete/{id}','App\Http\Controllers\Admin@delete')->name('delete');

Route::get('/editprofil/{id}','App\Http\Controllers\Admin@editprofil')->name('edit_profil');
Route::post('/updateprofil/{id}','App\Http\Controllers\Admin@updateprofil')->name('updateprofil');

Route::get('/generate','App\Http\Controllers\Admin@generate');
Route::get('/getdatachunk','App\Http\Controllers\Admin@getdatachunk');
Route::get('/getdatanochunk','App\Http\Controllers\Admin@getdatanochunk');

