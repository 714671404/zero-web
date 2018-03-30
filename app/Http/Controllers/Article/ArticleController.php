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

    public function show(Request $request)
    {
        return $this->articleRepository->get_list(['id'=>$request->id, 'size'=>$request->size]);
    }
}
