<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  /** @use HasFactory<\Database\Factories\CategoryFactory> */
  use HasFactory;

  protected $guarded = [];

  public function videos()
  {
    return Video::query()
      ->where('status', true)
      ->whereJsonContains('category', (string) $this->id)
      ->orderByDesc('id');
  }

}
