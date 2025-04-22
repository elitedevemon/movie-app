<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubMenu extends Model
{
  /** @use HasFactory<\Database\Factories\SubMenuFactory> */
  use HasFactory;

  protected $guarded = [];



  public function getCategoriesAttribute()
  {
    return Category::whereIn('id', json_decode($this->category) ?? [])->get();
  }
}
