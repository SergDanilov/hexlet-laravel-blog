<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ArticleCategoryController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', [PageController::class, 'about'])
	->name('about');


Route::get('articles/create', 'ArticleController@create')
  ->name('articles.create');

Route::get('articles', [ArticleController::class, 'index'])
  ->name('articles.index');

Route::post('articles', 'ArticleController@store')
  ->name('articles.store');

Route::get('articles/{id}', [ArticleController::class, 'show'])
  ->name('articles.show');


Route::get('articles_categories/create', 'ArticleCategoryController@create')
  ->name('article_categories.create');

Route::get('articles_categories',[ArticleCategoryController::class, 'index'])
	->name('article_categories.index');

Route::post('articles_categories', 'ArticleCategoryController@store')
  ->name('articles_categories.store');
