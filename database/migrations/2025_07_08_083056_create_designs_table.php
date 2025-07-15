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
        Schema::create('designs', function (Blueprint $table) {
            $table->id();

            $table->enum('design_type', ['individual', 'batch']);
            $table->string('color_image')->nullable();
            $table->string('name_customer')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('university_name')->nullable();
            $table->string('department')->nullable();
            $table->string('batch_number')->nullable();
            $table->integer('total_length')->nullable();
            $table->integer('shoulder_width')->nullable();
            $table->integer('arm_length')->nullable();


            // الروب
            $table->foreignId('robe_id')->nullable()->constrained('robes')->nullOnDelete();
            $table->string('custom_robe_image')->nullable();

            // القبعة
            $table->foreignId('hood_id')->nullable()->constrained('hoods')->nullOnDelete();
            $table->string('custom_hood_image')->nullable();
            $table->string('hood_color_image')->nullable();
            $table->string('hood_direction_color_image')->nullable();
            $table->enum('hood_direction', ['top', 'side', 'both'])->nullable();
            $table->string('hood_text')->nullable();

            // الوشاح
            $table->foreignId('scarf_id')->nullable()->constrained('scarves')->nullOnDelete();
            $table->string('scarf_color_image')->nullable();
            $table->string('custom_scarf_image')->nullable();
            $table->string('scarf_logo')->nullable();
            $table->text('scarf_text')->nullable();
            $table->string('scarf_embroidery_image_right')->nullable();
            $table->string('scarf_embroidery_image_left')->nullable();
            $table->string('scarf_embroidery_image_back')->nullable();
            $table->json('scarf_embroidery')->nullable();

            $table->decimal('total_price', 8, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('designs');
    }
};
