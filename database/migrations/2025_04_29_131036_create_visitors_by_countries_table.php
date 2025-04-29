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
    Schema::create('visitors_by_countries', function (Blueprint $table) {
      $table->id();
      $table->string('ip')->nullable();
      $table->string('country')->nullable();
      $table->string('country_code')->nullable();
      $table->decimal('lat', 10, 6)->nullable();
      $table->decimal('lon', 10, 6)->nullable();
      $table->string('platform')->nullable();
      $table->string('platform_version')->nullable();
      $table->string('browser')->nullable();
      $table->string('browser_version')->nullable();
      $table->string('device')->nullable();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('visitors_by_countries');
  }
};
