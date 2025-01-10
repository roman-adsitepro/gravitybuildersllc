<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{

  public function run(): void
  {
    Review::factory()->create([
        'status' => Review::STATUS_FEATURED,
        'name' => 'Samantha L.',
        'title' => 'Owner of Refresh SPA Salon',
        'rate' => 5,
        'message' => 'Since partnering with Image Marketing, our spa has seen a significant increase in foot traffic and client bookings. Their tailored marketing campaign helped us reach new customers and grow our business faster than we ever imagined.'
    ]);

    Review::factory()->create([
        'status' => Review::STATUS_FEATURED,
        'name' => 'J James T.',
        'title' => 'Founder of Tranquil Salon',
        'rate' => 5,
        'message' => "We were skeptical at first, but the free marketing campaigns really work! We've gained more clients and seen our revenue double in just three months. The team at Image Marketing is incredibly supportive and easy to work with."
    ]);

    Review::factory()->count(2)->create([ 'status' => Review::STATUS_DRAFT ]);
    Review::factory()->count(12)->create();
  }

}
