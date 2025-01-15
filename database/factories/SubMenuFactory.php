<?php

namespace Database\Factories;

use App\Models\Menu;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SubMenu>
 */
class SubMenuFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition(): array
  {
    return [
      //menu_id, menu_name, slug
      "menu_id" => $this->faker->randomElement(Menu::pluck('id')->toArray()),
      "menu_name" => $this->faker->name,
      "slug" => $this->faker->slug,
    ];
  }
}
