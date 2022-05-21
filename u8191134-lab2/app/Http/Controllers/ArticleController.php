<?php

namespace App\Http\Controllers;

use App\Http\Filters\ArticleFilter;
use App\Http\Requests\FilterRequest;
use App\Models\Article;

class ArticleController extends Controller
{
    public function allArticles(FilterRequest $request)
    {
        $data = $request->validated();

        $filter = app()->make(ArticleFilter::class, ['queryParams'=>array_filter($data)]);
        $articles =  Article::filter($filter)->paginate(20);
        return view('articles', compact('articles'));
    }
    public function articleOnId($code)
    {
        $article =  Article::find($code);
        return view('article_on_id', compact('article'));
    }
}
