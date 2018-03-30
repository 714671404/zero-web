<?php
/**
 * Created by PhpStorm.
 * User: joybo
 * Date: 2018/3/25
 * Time: 4:56
 */

namespace App\Repositories\Article;


use App\Model\Article;
use App\Http\Resources\ArticleResource;

class ArticleRepository
{

    protected $article;

    public function __construct(Article $article)
    {
        $this->article = $article;
    }

    public function get_list($id)
    {
        $article = $this->article::with('user')->where('id', '>', $id['id'])->paginate($id['size']);
        $lists = [];
        $lists['data'] = ArticleResource::collection($article);
        $lists['count'] = $this->article->count();
        return $lists;
    }
}