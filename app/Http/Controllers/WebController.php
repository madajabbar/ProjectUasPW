<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Tag;
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
}
