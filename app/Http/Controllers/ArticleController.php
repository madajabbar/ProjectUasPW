<?php

namespace App\Http\Controllers;
use App\Models\Article;
use App\Models\Tag;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $article = Article::limit(10)->get();
            return view('input-article',['articles'=>$article]);
    }

    public function create(Request $request)
    {
        $request->validate([

            'title' => 'required',
            'content' => 'required',
        ]);
        Article::create([
            'title'=> $request->title,
            'content'=> $request->content,
        ]);
        return redirect('/article');
    }
    public function edit($id){
        $article = Article::find($id);
        return view('update-article',['articles'=>$article]);
    }
    public function update(Request $request)
    {
        $article = Article::find($request->id);
        $article->title = $request->title;
        $article->content = $request->content;
        $article->save();
        return redirect('/article');
    }

    public function delete($id)
    {
        $article=Article::find($id);
        $article->delete();
        return redirect('/article');
    }
}
