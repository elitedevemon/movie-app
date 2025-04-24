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
  public function index(){
    $newses = News::orderByDesc("id")->limit(5)->whereStatus(true)->get();
    $trailer = Trailer::whereStatus(true)->latest('updated_at')->first();
    $categories = Category::where('status', true)->orderByDesc('id')->get();
    $videos = Video::where('status', true)->orderByDesc('id')->limit(10)->get();
    return view("welcome", compact(["categories", 'newses', 'trailer', 'videos']));
  }


  public function check(Video $video){
    // return json_decode($video->keyword);
    return view('pages.check-video', compact('video'));
  }
}
