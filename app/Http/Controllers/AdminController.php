<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\TrafficSource;
use App\Models\VisitorsByCountry;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AdminController extends Controller
{
  public function index()
  {
    return view("admin.dashboard");
  }

  public function visitorByCountry()
  {
    $visitors = VisitorsByCountry::latest()->get();

    $visitorStats = VisitorsByCountry::select('country', DB::raw('count(*) as total'))
      ->groupBy('country')
      ->pluck('total', 'country')
      ->toArray();

    return view('admin.pages.analytics.visitors-by-country.index', compact(['visitors', 'visitorStats']));
  }

  public function socialMediaShareAnalytics(Request $request)
  {
    $query = TrafficSource::query();

    if ($request->filled('source')) {
      $query->where('source', $request->source);
    }

    if ($request->filled('campaign')) {
      $query->where('campaign', $request->campaign);
    }

    $referrals = $query->latest()->paginate(20);

    $referralStats = TrafficSource::selectRaw('source, COUNT(*) as count')
      ->groupBy('source')
      ->pluck('count', 'source')
      ->toArray();

    return view('admin.pages.analytics.social-media-share.index', compact('referrals', 'referralStats'));
  }
}
