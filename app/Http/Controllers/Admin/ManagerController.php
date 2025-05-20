<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ManagerController extends Controller
{

  public function index(){
    $users = User::where('role', 'manager')->whereStatus(true)->get();
    return view('admin.pages.manager.index', compact('users'));
  }
  public function addManager(){
    return view('admin.pages.manager.create');
  }

  public function storeManager(Request $request){
    $request->validate([
      'name' => 'required',
      'email' => 'required|email',
      'password' => 'required|confirmed',
      'status' => 'required|in:1,0',
      'profile_picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
    ]);

    try {
      User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => bcrypt($request->password),
        'status' => $request->status,
        'role' => 'manager',
        'profile_picture' => image_process($request->file('profile_picture'), 'uploads/profile_pictures/manager', 200, 200)
      ]);
      return back();
    } catch (\Throwable $th) {
      throw $th;
    }
  }
}
