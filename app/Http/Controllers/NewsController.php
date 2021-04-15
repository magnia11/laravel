<?php


namespace App\Http\Controllers;


use App\Models\News;
use Illuminate\Support\Facades\View;

class NewsController extends Controller
{
    private $categories = [
        1 => 'Спорт',
        2 => 'Экономика',
        3 => 'Политика'
    ];

    public function index()
    {
        return view('news.index', ['categories' => $this->categories]);
    }

    public function list($categoryId)
    {
        $news = (new News())->getByCategoryId($categoryId);
        return view('news.list', ['news' => $news]);
    }

    public function card($id)
    {
        $news = $this->news[$id];
        echo $news['title'];
        exit;
    }

}