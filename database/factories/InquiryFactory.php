<?php

namespace Database\Factories;

use App\Models\Inquiry;
use Illuminate\Database\Eloquent\Factories\Factory;

class InquiryFactory extends Factory
{

  public function definition(): array
  {
    return [
      'status' => Inquiry::STATUS_NEW,
      'first_name' => $this->faker->firstName(),
      'last_name' => $this->faker->lastName(),
      'email' => $this->faker->unique()->safeEmail(),
      'phone' => $this->faker->phoneNumber(),
      'message' => $this->faker->paragraph(3),
    ];
  }

  public function viewed(): static
  {
    return $this->state(fn (array $attributes) => [
      'status' => Inquiry::STATUS_VIEWED,
    ]);
  }

}
