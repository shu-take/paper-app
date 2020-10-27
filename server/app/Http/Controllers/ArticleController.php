<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Http\Requests\ArticleRequest;

class ArticleController extends Controller
{
    public function index()
    {
        $items = Article::all();
        return view('articles.index', compact('items'));
    }
    public function store(ArticleRequest $request)
    {
        $item = new Article;
        $item->title = $request->title;
        $item->body = $request->body;
        $item->timestamps = false;

        $item->save();

        return redirect('/articles');
    }
    public function create()
    {
        return view('articles.create');
    }
    public function show($id)
    {
        $item = Article::find($id);
        return view('articles.show', compact('item'));
    }
    public function update(ArticleRequest $request, $id)
    {
        $item = Article::find($id);

        $item->title = $request->title;
        $item->body = $request->body;
        $item->timestamps = false;

        $item->save();

        return redirect('/articles');
    }
    public function destroy($id)
    {
        $item = Article::find($id);
        $item->delete();
        return redirect('/articles');
    }
    public function edit($id)
    {
        $item = Article::find($id);
        return view('articles.edit', compact('item'));
    }
    
    
}
