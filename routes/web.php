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

Route::get('/', 'PagesController@index')->name('index');
Route::get('/home', 'PagesController@index')->name('home');

Route::get('/instructies', 'PagesController@instructies')->name('instructies');




Route::get('/article/add', 'ArticlesController@add')->name('add_article');
Route::post('/article/add', 'ArticlesController@store')->name('');


Route::get('/article/edit/{id}', 'ArticlesController@edit')->name('edit_article');
Route::post('/article/edit/{id}', 'ArticlesController@update')->name('');


Route::get('/article/delete/{id}', 'ArticlesController@delete')->name('delete_article');
Route::post('/article/delete/{id}', 'ArticlesController@remove')->name('');




Route::get('/comments/{id}', 'CommentsController@edit');




Route::get('/comments/add/{id}', 'CommentsController@add')->name('add_comment');
Route::post('/comments/add/{id}', 'CommentsController@add')->name('');


Route::get('/comments/edit/{id}', 'CommentsController@edit')->name('edit_comment');
Route::post('/comments/edit/{id}', 'CommentsController@edit')->name('');


Route::get('/comments/delete/{id}', 'CommentsController@delete')->name('delete_comment');
Route::post('/comments/delete/{id}', 'CommentsController@delete')->name('');




Auth::routes();
