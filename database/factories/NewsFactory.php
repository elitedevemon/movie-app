<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition(): array
  {
    return [
      //news, news_category
      "news" => $this->faker->sentence,
      "news_category" => $this->faker->randomElement(['Upcoming Movie', 'Latest Movie', 'Emergency Alert', 'Movie Reviews', 'Box Office Reports', 'Celebrity News', 'Awards and Events'])
    ];
  }
}
