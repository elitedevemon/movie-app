<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\CategoryView;
use App\Models\News;
use App\Models\PageView;
use App\Models\Trailer;
use App\Models\Video;


class WelcomeController extends Controller
{
  public function index()
  {
    $newses = News::orderByDesc("id")->limit(5)->whereStatus(true)->get();
    $trailer = Trailer::whereStatus(true)->latest('updated_at')->first();
    $categories = Category::where('status', true)->orderByDesc('id')->get();
    $videos = Video::where('status', true)->where('production_status', 'released')->orderByDesc('id')->limit(10)->get();
    $mostViewedVideos = PageView::with('video:id,title,slug,thumbnail')->orderByDesc('views')->limit(10)->get();
    $topRatedVideos = Video::where('status', true)->where('production_status', 'released')->orderByDesc('imdb_rating')->limit(10)->get();
    $trendingVideos = PageView::join('videos', 'page_views.video_id', '=', 'videos.id')
      ->select('page_views.*', 'videos.title', 'videos.slug', 'videos.thumbnail', 'videos.imdb_rating')
      ->orderByDesc('page_views.views')
      ->orderByDesc('videos.imdb_rating')
      ->limit(10)
      ->get();
    $upcomingVideos = Video::where('status', true)->where('production_status', 'upcoming')->orderByDesc('id')->limit(10)->get();
    return view("welcome", compact(["categories", 'newses', 'trailer', 'videos', 'mostViewedVideos', 'topRatedVideos', 'trendingVideos', 'upcomingVideos']));
  }


  public function check(Video $video)
  {
    $categories = json_decode($video->category, true);

    // get all categories
    $category_values = Category::where('status', true)
      ->whereIn('id', $categories)
      ->orderByDesc('id')
      ->get();

    $videos = collect(); // Start with empty collection

    foreach ($categories as $category) {
      $related = Video::where('status', true)
        ->where('id', '!=', $video->id)
        ->whereJsonContains('category', $category)
        ->orderByDesc('id')
        ->limit(10)
        ->get();

      $videos = $videos->merge($related);
    }

    // Remove duplicate videos by 'id'
    $related_videos = $videos->unique('id')->take(8)->values();
    $popular_categories = CategoryView::orderByDesc('views')->with(['category' => function($query){
      $query->where('status', true)->select('id', 'name', 'slug');
    }])->take(10)->get();

    $popular_posts = PageView::orderByDesc('views')->with(['video' => function($query) {
      $query->where('status', true)->select('id', 'title', 'slug', 'thumbnail');
    }])->whereHas('video', function($query) use ($video) {
      $query->where('id', '!=', $video->id);
    })
      ->take(6)->get();

    $article = Article::inRandomOrder()->first();

    return view('pages.check-video', compact(['video', 'related_videos', 'category_values', 'popular_categories', 'popular_posts', 'article']));
  }

  // download function
  public function download($videoSlug, $articleSlug, $quality)
  {
    $video = Video::where('slug', $videoSlug)->first();
    $article = Article::where('slug', $articleSlug)->first();
    $categories = json_decode($video->category, true);

    // get all categories
    $category_values = Category::where('status', true)
      ->whereIn('id', $categories)
      ->orderByDesc('id')
      ->get();

    $videos = collect(); // Start with empty collection

    foreach ($categories as $category) {
      $related = Video::where('status', true)
        ->where('id', '!=', $video->id)
        ->whereJsonContains('category', $category)
        ->orderByDesc('id')
        ->limit(10)
        ->get();

      $videos = $videos->merge($related);
    }

    // Remove duplicate videos by 'id'
    $related_videos = $videos->unique('id')->take(8)->values();
    $popular_categories = CategoryView::orderByDesc('views')->with(['category' => function ($query) {
      $query->where('status', true)->select('id', 'name', 'slug');
    }])->take(10)->get();

    $popular_posts = PageView::orderByDesc('views')->with(['video' => function ($query) {
      $query->where('status', true)->select('id', 'title', 'slug', 'thumbnail');
    }])->whereHas('video', function ($query) use ($video) {
      $query->where('id', '!=', $video->id);
    })
      ->take(6)->get();

    $article = Article::inRandomOrder()->first();
    return view('pages.download-video', compact(
      [
        'video',
        'related_videos', 
        'category_values', 
        'popular_categories', 
        'popular_posts', 
        'article',
        'quality'
      ]));
  }
}
