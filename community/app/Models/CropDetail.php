<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CropDetail extends Model
{
    protected $table = 'crop_details';

    protected $casts = [
        'urdu_completed' => 'boolean',
    ];

    protected $fillable = [
        'crop_id',
        'crop_name',
        'crop_name_ur',
        'introduction',
        'introduction_ur',
        'basic_information',
        'basic_information_ur',
        'sowing_season',
        'sowing_season_ur',
        'harvesting_season',
        'harvesting_season_ur',
        'climate_requirements',
        'climate_requirements_ur',
        'soil_requirements',
        'soil_requirements_ur',
        'land_preparation',
        'land_preparation_ur',
        'seed_selection',
        'seed_selection_ur',
        'seed_rate',
        'seed_rate_ur',
        'irrigation_requirements',
        'irrigation_requirements_ur',
        'fertilizer_requirements',
        'fertilizer_requirements_ur',
        'growing_stages',
        'growing_stages_ur',
        'types_of_crop',
        'types_of_crop_ur',
        'crop_varieties',
        'crop_varieties_ur',
        'nutritional_value',
        'nutritional_value_ur',
        'importance_of_crop',
        'importance_of_crop_ur',
        'urdu_completed',
    ];

    public function crop()
    {
        return $this->belongsTo(Crop::class);
    }
}
