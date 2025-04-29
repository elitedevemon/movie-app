<?php

namespace App\Http\Controllers\Visitor;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    //
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $request->validate([
      'video_id' => 'required|exists:videos,id',
      'name' => 'required|string|max:255',
      'email' => 'nullable|email|max:255',
      'comment' => 'required|string|max:1000',
    ]);
    try {
      Comment::create($request->all());
      return redirect()->back()->with('success', 'Comment added successfully');
    } catch (\Throwable $th) {
      $th->getMessage();
      // Log the error message
      \Illuminate\Support\Facades\Log::error('Error adding comment: ' . $th->getMessage());
      return redirect()->back()->with('error', 'Failed to add comment');
    }
  }

  /**
   * Display the specified resource.
   */
  public function show(Comment $comment)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Comment $comment)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Comment $comment)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Comment $comment)
  {
    //
  }
}
