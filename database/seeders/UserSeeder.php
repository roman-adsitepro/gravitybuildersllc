<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{

  public function run(): void
  {
    User::factory()->admin()->create();
    User::factory()->count(2)->create();
    User::factory()->guest(1)->create();

  }

}
