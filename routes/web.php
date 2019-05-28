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

Route::get('/', 'FilesController@index')->name('root');
Route::get('/contact', 'PageController@contact')->name('contact');
Route::get('/about', 'PageController@about')->name('about');

Route::resource('/files', 'FilesController');

Route::get('/users/{user}/files', 'UserFilesController@index')->name('userFiles.index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
