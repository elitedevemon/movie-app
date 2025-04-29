<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Menu;
use App\Models\News;
use App\Models\Trailer;
use App\Models\Video;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
  public function index()
  {
    $newses = News::orderByDesc("id")->limit(5)->whereStatus(true)->get();
    $trailer = Trailer::whereStatus(true)->latest('updated_at')->first();
    $categories = Category::where('status', true)->orderByDesc('id')->get();
    $videos = Video::where('status', true)->where('production_status', 'released')->orderByDesc('id')->limit(10)->get();
    return view("welcome", compact(["categories", 'newses', 'trailer', 'videos']));
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


    return view('pages.check-video', compact(['video', 'related_videos', 'category_values']));
  }
}
