<?php

namespace App\Http\Controllers\Visitor;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Video;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
  public function show(Category $category) {
    $videos = $category->videos()->paginate(10);
    return $videos;
    // return view('pages.category', compact(['category', 'videos']));
  }
}
