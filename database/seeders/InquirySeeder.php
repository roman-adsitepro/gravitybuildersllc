<?php

namespace Database\Seeders;

use App\Models\Inquiry;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InquirySeeder extends Seeder
{
    public function run(): void
    {
      Inquiry::factory()->count(2)->create();
      Inquiry::factory()->viewed()->count(12)->create();
    }
}
