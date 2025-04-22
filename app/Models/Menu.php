<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
  /** @use HasFactory<\Database\Factories\MenuFactory> */
  use HasFactory;

  protected $guarded = [];


  public function sub_menus()
  {
    return $this->hasMany(SubMenu::class);
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
