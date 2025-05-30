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
    Schema::create('page_views', function (Blueprint $table) {
      $table->id();
      $table->foreignId('video_id')->constrained()->unique()->onDelete('cascade')->onUpdate('cascade');
      $table->unsignedBigInteger('views')->default(0);
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('page_views');
  }
};
