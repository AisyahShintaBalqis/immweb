<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function create()
    {
        return view('article.create');
    }

    public function store(Request $request)
    {
      
        // dd($request->all());
        $validated = $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
           
            
        ]);

        Article::create([
            "title" => $request->input('title'),
            "content" => $request->input('content'),
        
           
        ]);
        return redirect()->route('article.index')->with('status', 'Sukses Tambah Data');
    }

    public function index()
    {
        $article = Article::paginate(10);
        return view ('article.index', compact('article'));
    }

}
