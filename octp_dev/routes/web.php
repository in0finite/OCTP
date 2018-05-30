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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::resource('user', 
                'UsersController', 
                ['only' => ['show', 
                            'edit', 
                            'update', 
                            'destroy']])->middleware('auth');

Route::post('user/changepass/{id}', 'UsersController@changePass');
Route::post('user/changeemail/{id}', 'UsersController@changeEmail');

Route::get('/document/showAll', 'DocumentsController@showAll');

//Route::resource('document', 'DocumentsController');
Route::get('/document/create', 'DocumentsController@create');
Route::get('/document/store', 'DocumentsController@store');
Route::get('/document/show/{id}', 'DocumentsController@show');
//Route::get('/document/showAll', 'DocumentsController@showAll');
Route::get('/document/edit', 'DocumentsController@edit');



