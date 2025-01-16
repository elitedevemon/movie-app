<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Trailer>
 */
class TrailerFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition(): array
  {
    return [
      //trailer_name, trailer_url
      "trailer_name" => $this->faker->sentence,
      "trailer_url" => $this->faker->randomElement(['https://www.youtube.com/embed/UdsO4SM4wKI?si=9DBundbNjHLXZyVn', 'https://www.youtube.com/embed/lY8Mwtst_Mk?si=lD4uR8ydvs75bM08'])
    ];
  }
}
