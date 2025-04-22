<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Menu;
use App\Models\SubMenu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $menus = Menu::with('sub_menus')->get();
    return view('admin.pages.menus.index', compact('menus'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    $menus = Menu::all();
    $categories = Category::all();
    return view('admin.pages.menus.create', compact('menus', 'categories'));
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    if ($request->is_submenu) {
      $request->validate([
        'name' => 'required',
        'slug' => 'required|unique:sub_menus,slug',
        'menu_id' => 'required|exists:menus,id',
        'description' => 'required',
        'categories' => 'required|array',
        'categories.*' => 'required|exists:categories,id',
      ]);

      try {
        SubMenu::create([
          'name' => $request->name,
          'slug' => $request->slug,
          'menu_id' => $request->menu_id,
          'description' => $request->description,
          'category' => json_encode($request->categories),
        ]);
        return redirect()->route('admin.menus.index')->with('success', 'Sub Menu Created Successfully');
      } catch (\Throwable $th) {
        // throw $th;
        return redirect()->back()->with('error', 'Something went wrong');
      }
    }else{
      $request->validate([
        'name' => 'required',
        'slug' => 'required|unique:menus,slug',
        'description' => 'required',
        'categories' => 'required|array',
        'categories.*' => 'required|exists:categories,id',
      ]);

      try {
        Menu::create([
          'name' => $request->name,
          'slug' => $request->slug,
          'description' => $request->description,
          'category' => json_encode($request->categories),
        ]);
        return redirect()->route('admin.menus.index')->with('success', 'Menu Created Successfully');
      } catch (\Throwable $th) {
        throw $th;
        return redirect()->back()->with('error', 'Something went wrong');
      }
    }
  }

  /**
   * Display the specified resource.
   */
  public function show(Menu $menu)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Menu $menu)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Menu $menu)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Menu $menu)
  {
    //
  }
}
