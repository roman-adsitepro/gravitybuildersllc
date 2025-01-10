<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{

  public function definition(): array
  {
    return [
      'status' => Post::STATUS_PUBLIC,
      'name' => $this->faker->name(),
      'title' => $this->faker->jobTitle(),
      'rate' => $this->faker->numberBetween(4, 5),
      'message' => $this->faker->paragraph(3),
    ];
  }

}
