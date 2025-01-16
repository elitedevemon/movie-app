<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Menu;
use App\Models\News;
use App\Models\Trailer;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
  public function index(){
    $newses = News::orderByDesc("id")->limit(5)->whereStatus(true)->get();
    $menus = Menu::with('sub_menus')->get();
    $trailer = Trailer::whereStatus(true)->latest('updated_at')->first();
    $categories = Category::where('status', true)->orderByDesc('id')->get();
    return view("welcome", compact(["categories","menus", 'newses', 'trailer']));
  }
}
