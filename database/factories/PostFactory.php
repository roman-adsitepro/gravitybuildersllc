<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{

  public function definition(): array
  {
    return [
      'status' => Post::STATUS_PUBLIC,
      'user_id' => User::admin()->inRandomOrder()->first()?->id,
      'title' => $this->faker->jobTitle(),
      'description' => $this->faker->paragraph(1),
      'text' => $this->faker->paragraph(3),
    ];
  }

  public function draft(): static
  {
    return $this->state(fn (array $attributes) => [
      'status' => Post::STATUS_DRAFT,
    ]);
  }

  public function featured(): static
  {
    return $this->state(fn (array $attributes) => [
      'featured' => true,
    ]);
  }

}
