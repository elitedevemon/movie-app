<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\CategoryView;
use App\Models\PageView;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Mews\Purifier\Facades\Purifier;

class ArticleController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $articles = Article::latest()->get();
    return view('admin.pages.articles.index', compact('articles'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view('admin.pages.articles.create');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $request->validate([
      'title' => 'required',
      'short_description' => 'required',
      'content' => 'required',
      'seo_title' => 'required',
      'seo_description' => 'required',
      'seo_keywords' => 'required',
      'status' => 'required'
    ]);

    $slug = Str::slug($request->title).time();

    try {
      Article::create([
        'title' => $request->title,
        'slug' => $slug,
        'short_description' => $request->short_description,
        'content' => Purifier::clean($request->content),
        'seo_title' => $request->seo_title,
        'seo_description' => $request->seo_description,
        'seo_keywords' => $request->seo_keywords,
        'status' => $request->status
      ]);

      return redirect()->route('admin.articles.index');
    } catch (\Throwable $th) {
      throw $th;
    }
  }
  
  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Article $article)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Article $article)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Article $article)
  {
    //
  }
}
