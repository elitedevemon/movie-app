<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    Schema::create('helpers', function (Blueprint $table) {
      $table->id();
      $table->mediumText('question')->nullable();
      $table->mediumText('answer')->nullable();
      $table->mediumText('feedback')->nullable();
      $table->string('rating')->nullable();
      $table->foreignId('user_id')->constrained()->onDelete('cascade');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('helpers');
  }
};
