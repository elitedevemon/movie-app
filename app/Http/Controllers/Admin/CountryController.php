<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CountryList;
use Illuminate\Http\Request;

class CountryController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    return view('admin.pages.country.index', [
      'countries' => CountryList::paginate()
    ]);
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view('admin.pages.country.create');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $request->validate([
      'name' => 'required|string',
    ]);

    $countryNames = explode(',', $request->input('name'));

    $createdCount = 0;
    foreach ($countryNames as $name) {
      $trimmed = trim($name);
      if (!empty($trimmed)) {
        CountryList::firstOrCreate([
          'name' => $trimmed,
        ]);
        $createdCount++;
      }
    }

    return redirect()->route('admin.countries.index')
      ->with('success', "$createdCount countries added successfully.");
  }

  /**
   * Display the specified resource.
   */
  public function show(CountryList $country)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(CountryList $country)
  {
    return view('admin.pages.country.edit', compact('country'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, CountryList $country)
  {
    $request->validate([
      'name' => 'required|string',
    ]);

    $country->update([
      'name' => $request->input('name'),
    ]);

    return redirect()->route('admin.countries.index')
      ->with('success', 'Country updated successfully.');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(CountryList $country)
  {
    $country->delete();
    return redirect()->route('admin.countries.index')
      ->with('success', 'Country deleted successfully.');
  }
}
