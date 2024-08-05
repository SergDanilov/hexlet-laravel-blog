<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleCategoryController extends Controller
{
	public function index()
   	{
        $article_categories = ArticleCategory::paginate(10);
        // Статьи передаются в шаблон
        return view('article_category.index', compact('article_categories'));
    	}
}
