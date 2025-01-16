<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    Schema::create('news', function (Blueprint $table) {
      $table->id();
      $table->string('news');
      $table->enum('news_category', ['Upcoming Movie', 'Latest Movie', 'Emergency Alert', 'Movie Reviews', 'Box Office Reports', 'Celebrity News', 'Awards and Events'])->default('Emergency Alert');
      $table->enum('status', [true, false])->default(true);
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('news');
  }
};
