<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Menu>
 */
class MenuFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition(): array
  {
    return [
      // menu_name, slug
      "name" => $this->faker->name,
      "slug" => $this->faker->slug,
      "description" => $this->faker->text(100),
      "category" => json_encode($this->faker->randomElements(\App\Models\Category::pluck('id')->toJson(), 2)),
    ];
  }
}
