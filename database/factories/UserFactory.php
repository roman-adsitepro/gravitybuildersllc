<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
  protected static ?string $password;

  public function definition(): array
  {
    return [
      'role' => User::ROLE_USER,
      'name' => fake()->name(),
      'email' => fake()->unique()->safeEmail(),
      'email_verified_at' => now(),
      'password' => static::$password ??= Hash::make('password'),
      'remember_token' => Str::random(10),
    ];
  }

  public function unverified(): static
  {
    return $this->state(fn (array $attributes) => [
      'email_verified_at' => null,
    ]);
  }

  public function guest(): static
  {
    return $this->state(fn (array $attributes) => [
      'email' => null,
      'role' => User::ROLE_GUEST,
    ]);
  }

  public function admin(): static
  {
    return $this->state(fn (array $attributes) => [
      'name' => config('app.admin.name'),
      'email' => config('app.admin.email'),
      'password' => Hash::make(config('app.admin.password')),
      'role' => User::ROLE_ADMIN,
    ]);
  }

}
