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
    
    public function create()
    {
        // Передаем в шаблон вновь созданный объект. Он нужен для вывода формы
        $article_category = new ArticleCategory();
        return view('article.create', compact('article_category'));
    }
    
    public function store(Request $request)
    {
        // Проверка введенных данных
        // Если будут ошибки, то возникнет исключение
        // Иначе возвращаются данные формы
        $data = $this->validate($request, [
            'name_category' => 'required|unique:article_categories',
            'body' => 'required|max:250',
        ]);

        $article_category = new ArticleCategory();
        // Заполнение статьи данными из формы
        $article_category->fill($data);
        // При ошибках сохранения возникнет исключение
        $article_category->save();

        // Редирект на указанный маршрут
        return redirect()
            ->route('$article_category.index');
    }
}
