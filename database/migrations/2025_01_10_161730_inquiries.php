<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up(): void
  {
    Schema::dropIfExists('inquiries');
    Schema::create('inquiries', function (Blueprint $table) {
      $table->id();
      $table->string('status', 128)->nullable()->default('new');
      $table->string('first_name')->nullable();
      $table->string('last_name')->nullable();
      $table->string('email')->nullable();
      $table->string('phone')->nullable();
      $table->text('message')->nullable();
      $table->json('data')->nullable();
      $table->timestamps();
      $table->softDeletes();
    });
  }

  public function down(): void
  {
    Schema::dropIfExists('inquiries');
  }

};
