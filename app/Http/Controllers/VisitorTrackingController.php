<?php

namespace App\Http\Controllers;

use App\Models\VisitorsByCountry;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;
use Stevebauman\Location\Facades\Location;

class VisitorTrackingController extends Controller
{
  public function trackVisitorByCountry(Request $request)
  {
    // first check that this request->ip() is stored today or not
    $today = Carbon::today();
    $checkIp = VisitorsByCountry::where('ip', $request->ip())->whereDate('created_at', $today)->first();

    if ($checkIp) {
      return response()->json([
        'message' => 'already stored'
      ], 500);
    }

    try {
      $location = Location::get($request->ip());
      $agent = new Agent();
      $agent->setUserAgent($request->header('User-Agent'));
      $platform = $agent->platform();         // e.g., Windows, MacOS, Android
      $platformVersion = $agent->version($platform);
      $browser = $agent->browser();           // e.g., Chrome, Safari
      $browserVersion = $agent->version($browser);
      $device = $agent->device();             // e.g., iPhone, Nexus, etc.

      VisitorsByCountry::create([
        'ip' => $location->ip,
        'country' => $location->countryName,
        'country_code' => $location->countryCode,
        'lat' => $location->latitude,
        'lon' => $location->longitude,
        'platform' => $platform,
        'platform_version' => $platformVersion,
        'browser' => $browser,
        'browser_version' => $browserVersion,
        'device' => $device
      ]);

      return response()->json([
        'message' => 'Visitor stored'
      ], 200);
    } catch (\Throwable $th) {
      return response()->json([
        'message' => 'something went wrong. ' . $th->getMessage()
      ], 500);
    }
  }
}
