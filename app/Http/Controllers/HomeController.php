<?php

namespace App\Http\Controllers;
use Faker\Provider\Image;
use App\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(Request $request) {
        $articles = Article::where('is_hidden', 0) -> orderBy('is_top', 'desc')->orderBy('created_at', 'desc')-> limit(10)-> get();

        foreach ($articles as $article) {
            $article -> cover = Image::imageURL($article->cover);
            $article -> content = str_limit(strip_tags($article-> content_html), 500);
            $article -> created_at_date = $article -> created_at -> toDateString();
            $article -> update_at_diff = $article -> updated_at -> diffForHumans();
        }
        return view('welcome', compact('articles'));
    }
}
