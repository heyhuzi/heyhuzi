<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });



// get articles
Route::get('articles', 'ArticleCOntroller@index');
Route::get('articles/{id}', 'ArticleController@show');


Route::middleware('jwt.refresh')->group(function () {
    Route::get('auth/refresh', 'LoginController@refresh');
});

// need auth
Route::middleware('jwt.auth')->group(function () {
    // users
    Route::get('users', 'UserController@index');
    Route::get('users/{id}', 'UserController@show');
    Route::post('users', 'UserController@store');
    Route::put('users/{id}', 'UserController@update');
    Route::delete('users/{id}', 'UserController@delete');

    // articles
    Route::post('articles', 'ArticleCOntroller@store');
    Route::put('articles/{id}', 'ArticleCOntroller@update');
    Route::delete('articles/{id}', 'ArticleCOntroller@delete');
});
