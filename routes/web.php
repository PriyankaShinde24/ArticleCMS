<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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
Route::any('articleSearch', 'ArticlesController@index')->name('articles.search');

Route::resource('tags', 'TagController');
Route::get('/tag/{tag_id}',function ($tag_id){
    $articles = \App\Models\Articles::whereIn('id', \App\Models\ArticleTag::where('tag_id', $tag_id)->pluck('article_id','id')->toArray())->get();
    return view('welcome')->with(compact('articles'));
})->name('tag');

Route::resource('comments', 'CommentController');

Route::resource('articleTags', 'ArticleTagController');