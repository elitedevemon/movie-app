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
    $thumbnail = image_process($request->file('thumbnail'), 'uploads/images/thumbnail', 200, 270);
    $backgroundPoster = image_process($request->file('background_poster'), 'uploads/images/background_poster', 300, 400);
    $screenshot = image_process($request->file('screenshot'), 'uploads/images/screenshot');
    $trailer = file_process($request->file('trailer'), 'uploads/videos/trailer');
    
    // subtitle file
    if ($request->hasFile('subtitle_file')) {
      $subtitleFile = [];
      foreach ($request->file('subtitle_file') as $file) {
        $subtitleFile[] = file_process($file, 'uploads/files/subtitle');
      }
    } else {
      $subtitleFile = null;
    }
    
    $subtitleLanguage = json_encode(text_separate($request->subtitle_language, ','));
    $actor = json_encode(text_separate($request->actor, ','));
    $category = json_encode($request->category);
    $keyword = json_encode(text_separate($request->keyword, ','));
    $downloadLink = json_encode($request->download_link);

    try {
      Video::create([
        'title' => $request->title,
        'language' => $request->language,
        'release_date' => $request->release_date,
        'slug' => $request->slug,
        'meta_title' => $request->meta_title,
        'description' => $request->description,
        'short_description' => $request->short_description,
        'imdb_description' => $request->imdb_description,
        'trailer_url' => $request->trailer_url,
        'country' => $request->country,
        'age_restriction' => $request->age_restriction,
        'production_status' => $request->production_status,
        'imdb_rating' => $request->imdb_rating,
        'duration' => $request->duration,
        'type' => $request->type,
        'budget' => $request->budget,
        'box_office_collection' => $request->box_office_collection,
        'production_company' => $request->production_company,
        'director' => $request->director,
        'writer' => $request->writer,
        'actor' => $actor,
        'category' => $category,
        'keyword' => $keyword,
        'download_link' => $downloadLink,
        'thumbnail' => $thumbnail,
        'background_poster' => $backgroundPoster,
        'screenshot' => $screenshot,
        'trailer' => $trailer,
        'subtitle_file' => $subtitleFile,
        'subtitle_language' => $subtitleLanguage,
        'status' => (bool)($request->status ?? true),
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
        'message' => __('Something went wrong!'),
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
  public function update(Request $request, string $id)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    //
  }
}
