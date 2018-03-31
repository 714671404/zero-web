<?php

namespace App\Http\Controllers\Article;

use App\Repositories\Article\ArticleRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    protected $articleRepository;

    public function __construct(ArticleRepository $articleRepository)
    {
        $this->articleRepository = $articleRepository;
    }

    public function apiShow(Request $request)
    {
        return $this->articleRepository->get_list(['id'=>$request->id, 'size'=>$request->size]);
    }

    public function show(Request $request)
    {
        $article = $this->articleRepository->find($request->id);
        if ($article === 404) {
            return view('error.error');
        }
        return view('articles.show', compact('article'));
    }
}
