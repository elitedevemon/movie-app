<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PushNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PushNotificationController extends Controller
{
  public function storeSubscription(Request $request)
  {
    if (Auth::check()) {
      $notification = PushNotification::where('user_id', Auth::user()->id)->first();

      if ($notification && $notification->subscription != $request->subscription) {
        $notification->subscription = $request->subscription;
        $notification->save();
        return response()->json(['message' => 'updated successfully'], 200);
      }

      if ($notification && $notification->subscription == $request->subscription) {
        return response()->json(['message' => 'already added'], 200);
      }

      $items = new PushNotification();
      $items->user_id = Auth::user()->id;
      $items->subscription = $request->subscription;
      $items->save();

      return response()->json(['message' => 'added successfully'], 200);
    }
    return response()->json(['error' => 'Unauthorized'], 401);
  }
}
