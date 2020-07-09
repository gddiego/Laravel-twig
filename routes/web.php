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

Route::get('', function () {
    return view('welcome');
});


Route::get('/home', 'PagesController@index')->name('homepage');
Route::get('/principal', 'ClientController@create')->name('pricipal');

Route::get('/servico-construcao', function () {
    return view('pages.clients.servicos-construcao');
});

Route::post('/servico-construcao', 'ClientController@index')->name('construcao');

Route::post('/cadastrar', 'ClientController@store');
Route::get('/index', 'ClientController@index')->name('table');
