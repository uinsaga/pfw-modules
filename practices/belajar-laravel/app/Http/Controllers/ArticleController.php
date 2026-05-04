<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        // $articles = DB::table("articles")->get()->toArray();
        $articles = Article::get();
        return view("articles.index", ["articleList" => $articles]);
    }

    public function create()
    {
        return view("articles.create");
    }

    public function show($id)
    {
        $article = Article::find($id);

        return view("articles.view", compact('article'));
    }

    public function store(Request $request)
    {

        dd($request);

        $newArticle = $request->only(["title", "image", "description"]);

        //query builder
        // DB::table("articles")->insert($newArticle);

        //eloquent
        Article::created($newArticle);

        return redirect()->back();
    }

    public function edit($id)
    {
        $article = Article::where("id", $id)->first();

        return view("articles.edit", compact("article"));
    }

    public function update(Request $request, $id)
    {

        $article = Article::where("id", $id)->first();

        $article->title = $request->title;
        $article->image = $request->image;
        $article->description = $request->description;
        $article->save();

        return redirect("/");
    }

    public function destroy($id)
    {
        Article::where("id", $id)->delete();
        return redirect()->back();
    }
}
