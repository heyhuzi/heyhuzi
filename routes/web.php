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

Route::view('/', 'welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// articles
Route::get('articles', 'ArticleCOntroller@index');
Route::get('articles/{id}', 'ArticleCOntroller@show');
Route::post('articles', 'ArticleCOntroller@store');
Route::put('articles/{id}', 'ArticleCOntroller@update');
Route::delete('articles/{id}', 'ArticleCOntroller@delete');
