<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function () {
    $tags = ['обучение', 'программирование', 'php', 'oop'];
    return view('about', ['tags' => $tags]);
});

Route::get('articles/create', 'ArticleController@create')
  ->name('articles.create');

Route::get('articles', [ArticleController::class, 'index'])
  ->name('articles.index');

Route::post('articles', 'ArticleController@store')
  ->name('articles.store');
