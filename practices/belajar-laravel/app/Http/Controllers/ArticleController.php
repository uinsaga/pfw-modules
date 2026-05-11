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


        $request->validate([
            'title' => "required|string|min:5|max:20",
            "image" => "required|mimes:jpg,png,pdf|max:2048",
            "description" => "nullable"
        ]);

        // $newArticle = $request->only(["title", "image", "description"]);

        //query builder
        // DB::table("articles")->insert($newArticle);

        //eloquent
        // $saved = Article::created([]);
        // dd($saved);


        $path = $request->file('image')->store('articles', 'public');

        $article = new Article();
        $article->title = $request->get("title");
        $article->image = $path;
        $article->description = $request->get("description");

        if (!$article->save()) {
            return redirect()->withErrors("error", "fail to save data.");
        }

        return redirect()->back();
    }

    public function edit($id)
    {
        $article = Article::where("id", $id)->first();

        return view("articles.edit", compact("article"));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'title' => "required|string|min:5|max:20",
            "image" => "required|mimes:jpg,png,pdf|max:4096",
            "description" => "nullable"
        ]);

        $article = Article::where("id", $id)->first();

        $image = $request->get("image");

        if ($request->hasFile("image")) {
            $image = $request->file('image')->store('articles', 'public');
        }

        $article->title = $request->title;
        $article->image = $image;
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
