<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index()
    {
        $tags =  Tag::all();
        foreach ($tags as $item) {
            echo $item->id."| ".$item->title."| ".$item->code."|<br/>";
            //dd($item);
        }
    }
}
