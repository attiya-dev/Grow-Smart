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
        Schema::create('crop_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('crop_id')->constrained()->onDelete('cascade');
             $table->string('crop_name');
            $table->longText('introduction');
            $table->longText('basic_information');
            $table->longText('sowing_season');
            $table->longText('harvesting_season');
            $table->longText('climate_requirements');
            $table->longText('soil_requirements');
            $table->longText('land_preparation');
            $table->longText('seed_selection');
            $table->longText('seed_rate');
            $table->longText('irrigation_requirements');
            $table->longText('fertilizer_requirements');
            $table->longText('growing_stages');
            $table->longText('types_of_crop');
            $table->longText('crop_varieties');
            $table->longText('nutritional_value');
            $table->longText('importance_of_crop');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('crop_details');
    }
};
