<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
  public function markAsRead(Request $request)
  {
    $notification = Auth::user()->notifications()->where('data->notificationId', $request->notificationId)->first();

    if ($notification) {
      $notification->markAsRead();
      return response()->json(['success' => true], 200);
    }

    return response()->json(['success' => false], 404);
  }

  public function viewAll()
  {
    return view('admin.pages.notifications.index', [
      'notifications' => Auth::user()->notifications()->latest()->paginate(10),
    ]);
  }

  public function markAllAsRead()
  {
    Auth::user()->unreadNotifications->markAsRead();
    return response()->json(['success' => true], 200);
  }
}
