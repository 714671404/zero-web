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
        return $this->articleRepository->get_list(['id'=>$request->get('id'), 'size'=>$request->get('size')]);
    }

    public function apiShowFind(Request $request)
    {
        $article = $this->articleRepository->find($request->id);
        if ($article === 404) {
            return self::failed('当前页面不存在', 404);
        }
        return self::success($article);
    }
}
