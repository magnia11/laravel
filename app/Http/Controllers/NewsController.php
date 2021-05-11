<?php


namespace App\Http\Controllers;


use App\Models\News;

class NewsController extends Controller
{
    private $categories = [
        1 => 'Спорт',
        2 => 'Экономика',
        3 => 'Политика'
    ];

    public function index()
    {
        // $result = News::all();
        return view('news.index', ['categories' => $this->categories]);
    }

    public function list(News $news, $categoryId)
    {
        return view('news.list', ['news' => $news->getByCategoryId($categoryId)]);
    }

    public function card(News $news)
    {
        return view('news.card', ['model'=>$news]);
       // $card = (new News_old())->getById($id);
       // return view('news.card', ['news' => $card]);
    }

}