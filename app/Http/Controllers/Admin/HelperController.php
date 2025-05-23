<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Helper;
use Illuminate\Http\Request;

class HelperController extends Controller
{
  public function index()
  {
    return view('admin.pages.helpers.index', [
      'pendingQuestions' => Helper::where('status', 'pending')->with('user')->get(),
      'repliedQuestions' => Helper::where('status', 'answered')->with('user')->get(),
      'rejectedQuestions' => Helper::where('status', 'rejected')->with('user')->get(),
    ]);
  }

  public function reply(Request $request, Helper $helper)
  {
    $request->validate([
      'answer' => 'required',
    ]);

    $helper->update([
      'status' => 'answered',
      'answer' => $request->answer,
    ]);

    return redirect()->route('admin.helpers.index');
  }

  public function reject(Request $request, Helper $helper)
  {
    $helper->update([
      'rejection_reason' => $request->rejection_reason,
      'status' => 'rejected',
    ]);

    return redirect()->route('admin.helpers.index');
  }
}
