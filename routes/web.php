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

Route::get('/', 'ArticlesController@index')->name('index');
Route::get('/home', 'ArticlesController@index')->name('home');

Route::get('/instructies', 'PagesController@instructies')->name('instructies');




Route::get('/article/add', 'ArticlesController@add')->name('add_article');
Route::post('/article/add', 'ArticlesController@store')->name('');


Route::get('/article/edit/{article}', 'ArticlesController@edit')->name('edit_article');
Route::post('/article/edit/{article}', 'ArticlesController@update')->name('');


Route::get('/article/delete/{article}', 'ArticlesController@delete')->name('delete_article');
Route::post('/article/delete/{article}', 'ArticlesController@remove')->name('');



/*
Route::get('/comments/{article}', 'CommentsController@edit');
*/



Route::get('/comments/add/{comment}', 'CommentsController@add')->name('add_comment');
Route::post('/comments/add/{comment}', 'CommentsController@store')->name('');


Route::get('/comments/edit/{comment}', 'CommentsController@edit')->name('edit_comment');
Route::post('/comments/edit/{comment}', 'CommentsController@update')->name('');


Route::get('/comments/delete/{comment}', 'CommentsController@delete')->name('delete_comment');
Route::post('/comments/delete/{comment}', 'CommentsController@remove')->name('');




Auth::routes();
