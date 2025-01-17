<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class AdminController extends Controller
{
  public function index(){
    $menus = Menu::with('sub_menus')->whereStatus(true)->get();
    return view("admin.dashboard", compact(['menus']));
  }
}
