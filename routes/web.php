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

Route::get('/', 'PagesController@index');


Route::get('/home', 'PagesController@index');


Route::get('/instructies', 'PagesController@instructies');


Route::get('/login', 'PagesController@login');


Route::get('/register', 'PagesController@register');




Route::get('/article/add', 'ArticlesController@add');

Route::get('/article/edit/{id}', 'ArticlesController@edit');




Route::get('/comments/{id}', 'CommentsController@edit');

Route::get('/comments/edit/{id}', 'CommentsController@edit');


Auth::routes();
