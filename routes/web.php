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
Route::get('/hello', 'MyController@vinayak');
Route::post('/register', 'MyController@vinayak1');
Route::get('/test', 'MyController@storedata');