<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Comment;


class WebController extends Controller
{
    public function index(){
        $article = Article::limit(3)->orderBy('id', 'DESC')->get();
        // dd($article);
            return view('index',['article'=>$article]);
    }
    public function blog(){
        $article = Article::paginate(3);
            return view('blog',['article'=>$article]);
    }
    public function content($id){
        $content = Article::find($id);
        $article = Article::limit(3)->orderBy('id', 'DESC')->get();
            return view('single-blog',['content'=>$content,'article'=>$article]);
    }
    public function addComment(Request $request){
        $request->validate([
            'username' => 'required',
            'comment' => 'required',
            'article_id' => 'required',
        ]);
        Comment::create([
            'username'=> $request->username,
            'comment'=> $request->comment,
            'article_id'=> $request->article_id,
        ]);
        return redirect()->back();
    }
    public function about(){
        $article = Article::limit(3)->orderBy('id', 'DESC')->get();
        // dd($article);
            return view('about',['article'=>$article]);
    }
}
