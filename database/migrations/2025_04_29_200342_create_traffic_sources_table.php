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
    Schema::create('traffic_sources', function (Blueprint $table) {
      $table->id();
      $table->string('video_id')->nullable();
      $table->string('referrer')->nullable(); // full URL
      $table->string('source')->nullable();   // normalized domain like "Facebook"
      $table->string('campaign')->nullable();
      $table->ipAddress('ip')->nullable();
      $table->string('country')->nullable();
      $table->string('country_code')->nullable();
      $table->decimal('lat', 10, 6)->nullable();
      $table->decimal('lon', 10, 6)->nullable();
      $table->text('user_agent')->nullable();
      $table->boolean('is_returning')->default(false);
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('traffic_sources');
  }
};
