<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CropDetail extends Model
{
    protected $table = 'crop_details';

    protected $fillable = [
        'crop_id',
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

    public function crop()
    {
        return $this->belongsTo(Crop::class);
    }
}
