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
        Schema::create('robes', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();      // اسم الشكل
            $table->string('image');
            $table->decimal('price', 8, 2)->default(0);
            $table->decimal('price_university', 8, 2)->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('robes');
    }
};
