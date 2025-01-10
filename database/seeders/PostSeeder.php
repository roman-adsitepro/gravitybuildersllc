<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{

  public function run(): void
  {
    Post::factory()->draft()->count(2)->create();
    Post::factory()->featured()->count(2)->create();
    Post::factory()->count(5)->create();
  }

}
