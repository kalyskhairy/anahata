<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index() {
        $articles = Article::getAll();

        return view('articles', compact('articles'));
    }

    public function detail(Request $request) {

        $slug = $request->query('title');
        $data = Article::find($slug);

        if(empty($data)) {
            return view('404');
        }

        return view('article-detail', compact('data'));
    }
}

