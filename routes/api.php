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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//List Articles
Route::get('articles', 'Api\ArticleController@index');

//List Single Article
Route::get('article/{id}', 'Api\ArticleController@show');

//Create new Article
Route::post('article', 'Api\ArticleController@store');

//Update Article
Route::put('article', 'Api\ArticleController@store');

//Delete Article
Route::delete('article/{id}', 'Api\ArticleController@destroy');

Route::apiResource('/products', 'Api\ProductController');

Route::prefix('products')->group(function(){
    Route::apiResource('/{product}/review', 'Api\ReviewController');
});


