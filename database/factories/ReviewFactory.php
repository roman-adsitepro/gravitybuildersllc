<?php

namespace Database\Factories;

use App\Models\Review;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReviewFactory extends Factory
{

    public function definition(): array
    {
        return [
            'status' => Review::STATUS_PUBLIC,
            'name' => $this->faker->name(),
            'title' => $this->faker->jobTitle(),
            'rate' => $this->faker->numberBetween(4, 5),
            'message' => $this->faker->paragraph(3),
        ];
    }
}
