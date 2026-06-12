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
        Schema::create('pest_managements', function (Blueprint $table) {
             $table->id();

        $table->foreignId('crop_id')
              ->constrained()
              ->onDelete('cascade');
        $table->string('crop_name');
        $table->string('name');
        $table->string('type');

        $table->text('how_it_occurs');
        $table->text('symptoms');
        $table->text('protection');
        $table->text('recommended_control');

        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pest_managements');
    }
};
