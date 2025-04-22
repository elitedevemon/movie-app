<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SubMenu extends Model
{
  /** @use HasFactory<\Database\Factories\SubMenuFactory> */
  use HasFactory;

  protected $guarded = [];

  public function menu(): BelongsTo
  {
    return $this->belongsTo(Menu::class);
  }


  public function getCategoriesAttribute()
  {
    return Category::whereIn('id', json_decode($this->category) ?? [])->get();
  }

  public function categoryCheck($category_id)
  {
    return in_array($category_id, json_decode($this->category) ?? []);
  }
}
