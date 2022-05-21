<?php

namespace App\Http\Controllers;

use App\Models\ArticleTag;
use Illuminate\Http\Request;

class ArticleTagController extends Controller
{
    public function index()
    {
        $article_tags =  ArticleTag::all();
        foreach ($article_tags as $item) {
            echo $item->id."| ".$item->article_id."| ".$item->tag_id."|<br/>";
            //dd($item);
        }
    }
}
