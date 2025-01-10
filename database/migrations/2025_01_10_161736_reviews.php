<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up(): void
  {
    Schema::dropIfExists('reviews');
    Schema::create('reviews', function (Blueprint $table) {
      $table->id();
      $table->string('status', 128)->nullable()->default('new');
      $table->string('name')->nullable();
      $table->string('title')->nullable();
      $table->tinyInteger('rate')->nullable();
      $table->text('message')->nullable();
      $table->json('data')->nullable();
      $table->timestamps();
      $table->softDeletes();
    });
  }

  public function down(): void
  {
    Schema::dropIfExists('reviews');
  }

};
