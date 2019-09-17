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

Route::get('/','UserController@listingPage');
Route::get('/user/add','UserController@userForm');
Route::post('/user/add', 'UserController@createUser');
Route::get('/user/edit/{id}', 'UserController@editUserForm');
Route::post('/user/edit/{id}', 'UserController@updateUser');
Route::get('/user/delete/{id}','UserController@deleteUser');