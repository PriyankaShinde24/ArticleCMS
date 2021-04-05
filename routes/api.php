<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
Use App\Models\Articles;

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

Route::get('/articles', 'ArticleAPIController@articleListing');
Route::get('/articles/{article_id}', 'ArticleAPIController@show');

Route::post('/login', 'UserAPIController@login');
Route::get('/token', function () {
    return csrf_token();
});
Route::group(['middleware' => 'auth:api'], function() {
    Route::post('/articles', 'ArticleAPIController@store');
});
