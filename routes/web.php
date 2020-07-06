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
//Route::get('/hello', function () {
 //   return view('helloworld');
//});
Route::get('/insert', 'MyController@insert');
Route::get('/register1', 'MyController@vinayak1');
Route::get('/storedata', 'MyController@storedata');
Route::get('/show', 'MyController@showdata');
Route::get('/edit', 'MyController@edit');
Route::get('/delete', 'MyController@delete');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
