<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    //
    public function show($name) {
        $articles = Tag::where('name', $name)->first() ->articles -> where('is_hidden', 0) -> orderBy('view', 'desc')-> paginate(10);
        foreach ($articles as $article) {
            $article->cover = imageURL($article->cover);
            $article->content = str_limit(strip_tags($article->content_html), 150);
            $article->created_at_date = $article->created_at->toDateString();
            $article->updated_at_diff = $article->updated_at->diffForHumans();
        }
        $tags = Tag::all();
        return view('articles.list', compact('articles', 'tags'));
    }
}
