<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

  public function up(): void
  {
    Schema::dropIfExists('posts');
    Schema::create('posts', function (Blueprint $table) {
      $table->id();
      $table->boolean('featured', true)->index()->default(false);
      $table->string('status', 16)->index();
      $table->foreignId('user_id')->index();
      $table->string('title');
      $table->string('slug')->unique();
      $table->text('description')->nullable();
      $table->text('text')->nullable();
      $table->timestamps();
      $table->softDeletes();
    });
  }

  public function down(): void
  {
    Schema::dropIfExists('posts');
  }

};
