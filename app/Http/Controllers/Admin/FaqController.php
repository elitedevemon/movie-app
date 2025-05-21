<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $faqs = Faq::orderByDesc('status')->get();
    return view('admin.pages.faqs.index', compact('faqs'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view('admin.pages.faqs.create');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $request->validate([
      'question' => 'required',
      'answer' => 'required',
    ]);

    Faq::create($request->all());
    return redirect()->route('admin.faqs.index')->with('success', 'Faq created successfully');
  }

  /**
   * Display the specified resource.
   */
  public function show(Faq $faq)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Faq $faq)
  {
    // return $faq;
    return view('admin.pages.faqs.edit', compact('faq'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Faq $faq)
  {
    $request->validate([
      'question' => 'required',
      'answer' => 'required',
    ]);

    $faq->update($request->all());
    return redirect()->route('admin.faqs.index')->with('success', 'Faq updated successfully');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Faq $faq)
  {
    $faq->delete();
    return redirect()->route('admin.faqs.index')->with('success', 'Faq deleted successfully');
  }

  public function toggleStatus(Request $request, $id)
  {
    $faq = Faq::findOrFail($id);
    $faq->status = $request->status ? true : false;
    $faq->save();

    return response()->json(['success' => true, 'message' => 'Status updated successfully']);
  }
}
