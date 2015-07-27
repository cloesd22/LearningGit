<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticlesController extends Controller
{

    public function index()
    {
        $articles=Article::all();

        return view('pages.articles.index',compact('articles'));
    }

    public function show($id)
    {
        $article=Article::findOrFail($id);
        return view('pages.articles.show',compact('article'));

    }
}
