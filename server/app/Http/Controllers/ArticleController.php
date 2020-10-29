<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Http\Requests\ArticleRequest;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('articles.index', compact('articles'));
    }
    public function store(ArticleRequest $request)
    {
        $article = new Article;
        $article->title = $request->title;
        $article->body = $request->body;
        $article->timestamps = false;

        $article->save();

        return redirect('/articles');
    }
    public function create()
    {
        return view('articles.create');
    }
    public function show($id)
    {
        $article = Article::find($id);
        return view('articles.show', compact('article'));
    }
    public function update(ArticleRequest $request, $id)
    {
        $article = Article::find($id);

        $article->title = $request->title;
        $article->body = $request->body;
        $article->timestamps = false;

        $article->save();

        return redirect('/articles');
    }
    public function destroy($id)
    {
        $article = Article::find($id);
        $article->delete();
        return redirect('/articles');
    }
    public function edit($id)
    {
        $article = Article::find($id);
        return view('articles.edit', compact('article'));
    }
    
    
}
