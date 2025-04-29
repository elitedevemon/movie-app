<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\VisitorsByCountry;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
  public function index(){
    return view("admin.dashboard");
  }

  public function visitorByCountry() {
    $visitors = VisitorsByCountry::latest()->get();

    $visitorStats = VisitorsByCountry::select('country', DB::raw('count(*) as total'))
      ->groupBy('country')
      ->pluck('total', 'country')
      ->toArray();

    return view('admin.pages.analytics.visitors-by-country.index', compact(['visitors', 'visitorStats']));
  }
}
