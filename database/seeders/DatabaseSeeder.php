<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Menu;
use App\Models\News;
use App\Models\SubMenu;
use App\Models\Trailer;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   */
  public function run(): void
  {
    // User::factory(10)->create();
    Category::factory()->count(15)->create();
    Menu::factory()->count(5)->create();
    SubMenu::factory()->count(5)->create();
    News::factory()->count(20)->create();
    Trailer::factory()->count(20)->create();

    // User::factory()->create([
    //   'name' => 'Test User',
    //   'email' => 'test@example.com',
    // ]);
  }
}
