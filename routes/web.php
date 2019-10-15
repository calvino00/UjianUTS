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

Route::get('/uts','uts@index');
//Route::get('/uts/{name}','Hello@Show'); //
Route::get('/uts','uts@index')->name('utsIndex');
Route::get('/uts/search','uts@search')->name('utsSearch'); //
Route::get('/uts/show','uts@show')->name('utsShow');
Route::get('/uts/new','uts@new_form')->name('utsNewForm');
Route::post('/uts','uts@save')->name('utsCreate');
Route::get('/uts/{id}','uts@detail')->name('utsDetail');
Route::get('/uts/{id}/delete', 'uts@delete')->name('utsDelete');
Route::get('/uts/edit/{id}','uts@edit')->name('utsEditForm');
Route::post('/uts/edit/{id}','uts@update')->name('utsUpdate');
