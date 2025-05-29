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
    Schema::create('videos', function (Blueprint $table) {
      $table->id();
      // basic information
      $table->string('title');
      $table->string('name')->nullable();
      $table->string('language')->nullable();
      $table->json('subtitle_language')->nullable();
      $table->integer('duration')->nullable();
      $table->date('release_date')->nullable();
      $table->string('trailer_url')->nullable();
      $table->string('country')->nullable();
      $table->string('age_restriction')->nullable();
      $table->enum('production_status', ['released', 'upcoming', 'post-production'])->default('released');

      // movie details
      $table->longText('imdb_description')->nullable();
      $table->string('director')->nullable();
      $table->string('writer')->nullable();
      $table->json('actor')->nullable();
      $table->integer('imdb_rating')->nullable();
      $table->enum('type', ['action', 'adventure', 'comedy', 'crime', 'drama', 'fantasy', 'horror', 'mystery', 'romance', 'sci-fi', 'thriller', 'adult', 'anime'])->nullable();
      $table->json('category')->nullable();
      $table->integer('budget')->nullable();
      $table->integer('box_office_collection')->nullable();
      $table->string('production_company')->nullable();

      // seo
      $table->string('slug')->unique();
      $table->string('meta_title')->nullable();
      $table->json('keyword')->nullable();
      $table->longText('description')->nullable();
      $table->longText('short_description')->nullable();

      // download link
      $table->json('download_link')->nullable();

      // media files
      $table->string('thumbnail')->nullable();
      $table->string('background_poster')->nullable();
      $table->string('screenshot')->nullable();
      $table->string('trailer')->nullable();
      $table->json('subtitle_file')->nullable();
      $table->enum('status', [true, false])->default(true);
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('videos');
  }
};
