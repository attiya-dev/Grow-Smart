<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('crops', function (Blueprint $table) {
            $table->string('name_ur')->nullable()->after('name');
        });

        Schema::table('crop_details', function (Blueprint $table) {
            $fields = [
                'crop_name',
                'introduction',
                'basic_information',
                'sowing_season',
                'harvesting_season',
                'climate_requirements',
                'soil_requirements',
                'land_preparation',
                'seed_selection',
                'seed_rate',
                'irrigation_requirements',
                'fertilizer_requirements',
                'growing_stages',
                'types_of_crop',
                'crop_varieties',
                'nutritional_value',
                'importance_of_crop',
            ];

            foreach ($fields as $field) {
                $table->longText($field . '_ur')->nullable()->after($field);
            }
        });

        Schema::table('pest_managements', function (Blueprint $table) {
            $fields = [
                'crop_name',
                'name',
                'type',
                'how_it_occurs',
                'symptoms',
                'protection',
                'recommended_control',
            ];

            foreach ($fields as $field) {
                $table->text($field . '_ur')->nullable()->after($field);
            }
        });
    }

    public function down(): void
    {
        Schema::table('pest_managements', function (Blueprint $table) {
            foreach ([
                'crop_name_ur',
                'name_ur',
                'type_ur',
                'how_it_occurs_ur',
                'symptoms_ur',
                'protection_ur',
                'recommended_control_ur',
            ] as $field) {
                $table->dropColumn($field);
            }
        });

        Schema::table('crop_details', function (Blueprint $table) {
            foreach ([
                'crop_name_ur',
                'introduction_ur',
                'basic_information_ur',
                'sowing_season_ur',
                'harvesting_season_ur',
                'climate_requirements_ur',
                'soil_requirements_ur',
                'land_preparation_ur',
                'seed_selection_ur',
                'seed_rate_ur',
                'irrigation_requirements_ur',
                'fertilizer_requirements_ur',
                'growing_stages_ur',
                'types_of_crop_ur',
                'crop_varieties_ur',
                'nutritional_value_ur',
                'importance_of_crop_ur',
            ] as $field) {
                $table->dropColumn($field);
            }
        });

        Schema::table('crops', function (Blueprint $table) {
            $table->dropColumn('name_ur');
        });
    }
};
