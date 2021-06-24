<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Article;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $article = Article::all();
        $tag = Tag::paginate(10);
            return view('input-tag',['tags'=>$tag, 'articles'=>$article]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->validate([
            'tag' => 'required',
            'article_id' => 'required',
        ]);
        Tag::create([
            'tag'=> $request->tag,
            'article_id'=> $request->article_id,
        ]);
        return redirect('/tag');
    }


    public function update(Request $request)
    {
        $tag = Tag::find($request->id)->first();
        $tag->tag = $request->tag;
        $tag->article_id = $request->article_id;
        $tag->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $tag=Tag::find($id)->first();
        $tag->delete();
        return back();
    }
}
