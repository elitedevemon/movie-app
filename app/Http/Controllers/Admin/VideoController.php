<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\VideoStoreRequest;
use App\Models\Category;
use App\Models\Menu;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $videos = Video::all();
    return view('admin.pages.videos.index', compact('videos'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    $categories = Category::all();
    return view('admin.pages.videos.create', compact('categories'));
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(VideoStoreRequest $request)
  {
    // return $request->all();
    $thumbnail = image_process($request->file('thumbnail'), 'uploads/images/thumbnail', 200, 270);
    $screenshot = image_process($request->file('screenshot'), 'uploads/images/screenshot');
    
    $subtitleLanguage = json_encode(text_separate($request->subtitle_language, ','));
    $actor = json_encode(text_separate($request->actor, ','));
    $category = json_encode($request->category);
    $keyword = json_encode(text_separate($request->keyword, ','));
    $downloadLink = json_encode($request->download_link);

    $production_status = $request->production_status ? 'released' : 'upcoming';

    try {
      Video::create([
        'title' => $request->title,
        'name' => $request->name,
        'release_date' => $request->release_date,
        'slug' => $request->slug,
        'meta_title' => $request->meta_title,
        'description' => $request->description,
        'short_description' => $request->short_description,
        'imdb_description' => $request->imdb_description,
        'trailer_url' => $request->trailer_url,
        'production_status' => $production_status,
        'imdb_rating' => $request->imdb_rating,
        'duration' => $request->duration,
        'type' => $request->type,
        'director' => $request->director,
        'writer' => $request->writer,
        'actor' => $actor,
        'category' => $category,
        'keyword' => $keyword,
        'download_link' => $downloadLink,
        'thumbnail' => $thumbnail,
        'screenshot' => $screenshot,
        'subtitle_language' => $subtitleLanguage,
        'status' => (bool)($request->status ?? false),
      ]);
      return response()->json([
        'status' => true,
        'message' => __('Video created successfully!'),
        'redirect' => route('admin.videos.index')
      ]);
    } catch (\Throwable $th) {
      // throw $th;
      return response()->json([
        'status' => false,
        'message' => __('Something went wrong!'. $th->getMessage()),
      ]);
    }
  }

  /**
   * Display the specified resource.
   */
  public function show(string $id)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(string $id)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Video $video)
  {
    return $video;
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Video $video)
  {
    try {
      $video->delete();
      return back()->with('success', __('Video deleted successfully!'));
    } catch (\Throwable $th) {
      // throw $th;
      return back()->with('error', __('Something went wrong!'. $th->getMessage()));
    }
  }
}
