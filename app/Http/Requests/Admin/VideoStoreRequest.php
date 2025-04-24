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
      'slug' => 'required|unique:videos',
      'meta_title' => 'required',
      'description' => 'required',
      'short_description' => 'required',
      'imdb_description' => 'nullable',
      'trailer_url' => 'nullable|url',
      'country' => 'required',
      'age_restriction' => 'required',
      'production_status' => 'required|in:released,upcoming,post-production',
      'imdb_rating' => 'nullable|numeric|min:0|max:10',
      'duration' => 'nullable|integer',
      'type' => 'nullable|in:action,adventure,comedy,crime,drama,fantasy,horror,mystery,romance,sci-fi,thriller,adult,anime',
      'budget' => 'nullable|integer',
      'box_office_collection' => 'nullable|integer',
      'production_company' => 'nullable',
      'director' => 'nullable',
      'writer' => 'nullable',
      'actor' => 'nullable',
      'category' => 'nullable',
      'keyword' => 'nullable',
      'download_link' => 'nullable',
      'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      'background_poster' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      'screenshot' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      'trailer' => 'nullable|mimes:mp4,mov,avi,wmv|max:2048',
      'subtitle_file' => 'nullable|array',
      'subtitle_file.*' => 'mimes:srt|max:2048',
      'status' => 'nullable|boolean',
      'release_date' => 'nullable|date',
      'language' => 'nullable',
      'subtitle_language' => 'nullable',
    ];
  }
}
