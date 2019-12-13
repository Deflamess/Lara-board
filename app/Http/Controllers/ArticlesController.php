<?php
/**
 * Created by PhpStorm.
 * User: Defla
 * Date: 13-Dec-19
 * Time: 14:39
 */

namespace App\Http\Controllers;


use App\Article;

class ArticlesController
{
    public function index()
    {
        $articles = Article::latest()->get();

        return view('articles.index', [
            'articles' => $articles
        ]);
    }

    public function show($id)
    {
        $article = Article::find($id);

        return view('articles.show', [
            'article' => $article
        ]);
    }
}