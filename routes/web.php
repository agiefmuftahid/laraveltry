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
    $namaSistem = 'Restoku';
    return view('home.index',compact('namaSistem'));
});

//Form
Route::get('/login', 'UserController@formLogin');
Route::get('/daftar', 'UserController@formRegister');

//Action
Route::post('/daftar', 'UserController@registerPost');
