<?php

namespace App\Http\Controllers;

use App\Models\CategoryView;
use App\Models\CategoryViewByCountry;
use App\Models\PageView;
use App\Models\PageViewByCountry;
use App\Models\TrafficSource;
use App\Models\Video;
use App\Models\VisitorsByCountry;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Str;
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


  /*
   * Track visitor by page view
   */
  public function trackVisitorByPageView(Request $request, Video $video)
  {
    // first check that this request->ip() is stored today or not
    $today = Carbon::today();
    $checkIp = PageViewByCountry::where('ip', $request->ip())->where('video_id', $video->id)->whereDate('created_at', $today)->first();

    if ($checkIp) {
      return response()->json([
        'message' => 'already stored'
      ], 500);
    }

    try {
      $location = Location::get($request->ip());            // e.g., iPhone, Nexus, etc.

      PageViewByCountry::create([
        'video_id' => $video->id,
        'ip' => $location->ip,
        'country' => $location->countryName,
        'country_code' => $location->countryCode,
        'lat' => $location->latitude,
        'lon' => $location->longitude
      ]);

      $page_view = PageView::where('video_id', $video->id)->firstOrCreate([
        'video_id' => $video->id
      ], [
        'views' => 1
      ]);

      // If the record exists, increment the views
      if (!$page_view->wasRecentlyCreated) {
        $page_view->increment('views');
      }

      return response()->json([
        'message' => 'Visitor stored'
      ], 200);
    } catch (\Throwable $th) {
      return response()->json([
        'message' => 'something went wrong. ' . $th->getMessage()
      ], 500);
    }
  }


  /*
   * Track visitor by page view
   */
  public function trackVisitorByCategoryView(Request $request, Video $video)
  {
    $categories = json_decode($video->category);

    foreach ($categories as $category) {
      // first check that this request->ip() is stored today or not
      $today = Carbon::today();
      $checkIp = CategoryViewByCountry::where('ip', $request->ip())->where('category_id', $category)->whereDate('created_at', $today)->first();

      if (!$checkIp) {
        try {
          $location = Location::get($request->ip());            // e.g., iPhone, Nexus, etc.

          CategoryViewByCountry::create([
            'category_id' => $category,
            'ip' => $location->ip,
            'country' => $location->countryName,
            'country_code' => $location->countryCode,
            'lat' => $location->latitude,
            'lon' => $location->longitude
          ]);

          $category_view = CategoryView::where('category_id', $category)->firstOrCreate([
            'category_id' => $category
          ], [
            'views' => 1
          ]);

          // If the record exists, increment the views
          if (!$category_view->wasRecentlyCreated) {
            $category_view->increment('views');
          }
        } catch (\Throwable $th) {
          return response()->json([
            'message' => 'something went wrong. ' . $th->getMessage()
          ], 500);
        }
      }
    }
    return response()->json([
      'message' => 'All category view stored'
    ], 200);
  }


  // track the traffic source
  public function trackTrafficSource(Request $request, Video $video = null)
  {
    $referrer = request()->headers->get('referer');
    $utmSource = $request->query('utm_source');
    $utmCampaign = $request->query('utm_campaign');
    $host = parse_url($referrer ?? '', PHP_URL_HOST);
    $ownHost = request()->getHost();

    // check if this user is a returning user or not.
    $isReturning = Cookie::has('visitor_id');
    if (!$isReturning) {
      Cookie::queue('visitor_id', Str::uuid(), 60 * 24 * 30);
    }

    // Determine source
    if ($host) {
      $source = (str_contains($host, $ownHost)) ? 'Internal' : ucfirst(str_replace('www.', '', $host));
    }

    $source ??= ucfirst($utmSource) ?? 'Direct';

    // Log only unique IP per referrer per day for a video
    $ip = $request->ip();
    $userAgent = request()->header('User-Agent');
    $today = Carbon::today();

    $exists = TrafficSource::where('ip', $ip)
      ->when($video !== null, function ($query) use ($video) {
        $query->where('video_id', $video->id);
      })
      ->whereDate('created_at', $today)
      ->where('source', $source)
      ->exists();

    if (!$exists) {
      try {
        $location = Location::get($ip);
        TrafficSource::create([
          'video_id' => $video->id ?? '',
          'referrer' => $referrer,
          'source' => $source,
          'campaign' => $utmCampaign,
          'ip' => $ip,
          'country' => $location->countryName,
          'country_code' => $location->countryCode,
          'lat' => $location->latitude,
          'lon' => $location->longitude,
          'user_agent' => $userAgent,
          'is_returning' => $isReturning
        ]);
      } catch (\Throwable $th) {
        return response()->json([
          'message' => 'Something went wrong. '. $th->getMessage()
        ]);
      }
    }

    return response()->json([
      'message' => "Referrer request stored {$video->id}" ?? ''
    ]);
  }
}
