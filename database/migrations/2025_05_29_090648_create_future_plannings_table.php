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
    Schema::create('future_plannings', function (Blueprint $table) {
      $table->id();
      $table->string('title')->nullable();
      $table->date('target_date')->nullable();
      $table->mediumText('plan_description')->nullable();
      $table->enum('status', ['pending', 'in_progress', 'completed'])->default('pending');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('future_plannings');
  }
};
