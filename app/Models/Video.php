<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
  /** @use HasFactory<\Database\Factories\VideoFactory> */
  use HasFactory;

  protected $guarded = [];

  // get download link
  public function getdownloadLinksAttribute()
  {
    return json_decode($this->download_link);
  }

  // get subtitle language
  public function getSubtitleLanguagesAttribute()
  {
    return implode(', ', json_decode($this->subtitle_language) ?? []);
  }

  // get keywords
  public function getKeywordsAttribute()
  {
    return implode(', ', json_decode($this->keyword) ?? []);
  }

  // get actors
  public function getActorsAttribute()
  {
    return implode(', ', json_decode($this->actor) ?? []);
  }
}
