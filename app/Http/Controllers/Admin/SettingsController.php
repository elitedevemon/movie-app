<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Settings;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
  public function index()
  {
    return view('admin.pages.settings.index', [
      'settings' => Settings::first()
    ]);
  }

  public function update(Request $request, Settings $settings)
  {
    $settings->update($request->all());
    return redirect()->back()->with('success', 'Settings updated successfully.');
  }
}
