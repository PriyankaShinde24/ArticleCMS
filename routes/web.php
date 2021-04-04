<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    $articles = \App\Models\Articles::latest()->get();
    return view('welcome')->with(compact('articles'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('articles', 'ArticlesController');

Route::resource('tags', 'TagController');

Route::resource('comments', 'CommentController');

Route::resource('articleTags', 'ArticleTagController');