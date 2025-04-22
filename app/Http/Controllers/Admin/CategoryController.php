<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $categories = Category::all();
    return view('admin.pages.categories.index', compact('categories'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view('admin.pages.categories.create');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $request->validate([
      'name' => 'required|string|max:255',
      'slug' => 'required|string|max:255|unique:categories,slug',
      'description' => 'nullable|string',
    ]);

    try {
      Category::create([
        'name' => $request->name,
        'slug' => $request->slug,
        'description' => $request->description,
      ]);

      return redirect()->route('admin.categories.index')->with('success', 'Category created successfully.');
    } catch (\Exception $e) {
      return redirect()->back()->with('error', 'Failed to create category: ' . $e->getMessage());
    }
  }

  /**
   * Display the specified resource.
   */
  public function show(Category $category)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Category $category)
  {
    return view('admin.pages.categories.edit', compact('category'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Category $category)
  {
    $request->validate([
      'name' => 'required|string|max:255',
      'slug' => "required|string|max:255|unique:categories,slug,{$category->id}",
      'description' => 'nullable|string',
    ]);

    try {
      $category->update([
        'name' => $request->name,
        'slug' => $request->slug,
        'description' => $request->description,
      ]);

      return redirect()->route('admin.categories.index')->with('success', 'Category updated successfully.');
    } catch (\Exception $e) {
      return redirect()->back()->with('error', 'Failed to update category: ' . $e->getMessage());
    }
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Category $category)
  {
    try {
      $category->delete();
      return redirect()->route('admin.categories.index')->with('success', 'Category deleted successfully.');
    } catch (\Exception $e) {
      return redirect()->back()->with('error', 'Failed to delete category: ' . $e->getMessage());
    }
  }
}
