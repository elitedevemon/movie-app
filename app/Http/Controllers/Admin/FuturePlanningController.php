<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FuturePlanning;
use Illuminate\Http\Request;

class FuturePlanningController extends Controller
{
  public function index()
  {
    return view('admin.pages.future_planning.index', [
      'plans' => FuturePlanning::orderByRaw("
          CASE status
              WHEN 'in_progress' THEN 1
              WHEN 'pending' THEN 2
              WHEN 'completed' THEN 3
              ELSE 4
          END
      ")->get()
    ]);
  }

  public function store(Request $request)
  {
    $data = $request->all();
    FuturePlanning::create($data);
    return redirect()->route('admin.future-planning.index')->with('success', 'Plan created successfully');
  }

  public function show(FuturePlanning $planning)
  {
    return response()->json($planning);
  }

  public function destroy(FuturePlanning $planning)
  {
    try {
      $planning->delete();
      return redirect()->back()->with('success', 'Plan deleted successfully');
    } catch (\Throwable $th) {
      return redirect()->back()->with('error', $th->getMessage());
    }
  }
}
