<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class VideoStoreRequest extends FormRequest
{
  /**
   * Determine if the user is authorized to make this request.
   */
  public function authorize(): bool
  {
    return true;
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
   */
  public function rules(): array
  {
    return [
      'title' => 'required',
      'name' => 'required',
      'slug' => 'required|unique:videos',
      'meta_title' => 'required',
      'description' => 'required',
      'short_description' => 'required',
      'imdb_description' => 'nullable',
      'trailer_url' => 'nullable|url',
      'production_status' => 'boolean',
      'imdb_rating' => 'nullable|numeric|min:0|max:10',
      'duration' => 'nullable|string',
      'type' => 'nullable|in:action,adventure,comedy,crime,drama,fantasy,horror,mystery,romance,sci-fi,thriller,adult,anime',
      'director' => 'nullable',
      'writer' => 'nullable',
      'actor' => 'nullable',
      'category' => 'nullable',
      'keyword' => 'nullable',
      'download_link' => 'nullable',
      'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      'screenshot' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      'status' => 'nullable|boolean',
      'release_date' => 'nullable|date',
      'subtitle_language' => 'nullable',
    ];
  }
}
