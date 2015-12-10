<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

use App\Article;
use App\Tag;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\carbon;

class ArticleController extends Controller
{

    public function index()
    {
    	$articles = Article::latest('published_at')->published()->get();
    	
    	return view('article.index', compact('articles'));
    }

    public function show($id)
    {
    	$article = Article::findOrFail($id);

    	return view('article.show', compact('article'));
    }

    public function create()
    {
        $tag = Tag::lists('name', 'id');
    	return view('article.create', compact('tag'));
    }

    public function store(Requests\ArticleRequest $req)
    {   

        $article = Article::create($req->all());

        $article->tags()->attach($req->input('tags'));

        return redirect('article');
    }

    public function edit($id)
    {
        $tag = Tag::lists('name', 'id');
        $article = Article::findOrFail($id);

        return view('article.edit', compact('article','tag'));
    }

    public function update($id, Requests\ArticleRequest $req)
    {   
        $article = Article::findOrFail($id);

        $article->update($req->all());

        $article->tags()->sync($req->input('tags'));

        return redirect('article');
    }

   
}
