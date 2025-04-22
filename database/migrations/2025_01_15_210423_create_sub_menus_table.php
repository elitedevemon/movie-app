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
    Schema::create('sub_menus', function (Blueprint $table) {
      $table->id();
      $table->foreignId('menu_id')->constrained()->onDelete('CASCADE')->onUpdate('CASCADE');
      $table->string('name');
      $table->string('slug')->unique();
      $table->string('description')->nullable();
      $table->json('category')->nullable();
      $table->enum('status', [true, false])->default(true);
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('sub_menus');
  }
};
