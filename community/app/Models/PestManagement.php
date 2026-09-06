<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PestManagement extends Model
{
    protected $table = 'pest_managements';

    protected $casts = [
        'urdu_completed' => 'boolean',
    ];

    protected $fillable = [
        'crop_id',
        'crop_name',
        'crop_name_ur',
        'name',
        'name_ur',
        'type',
        'type_ur',
        'how_it_occurs',
        'how_it_occurs_ur',
        'symptoms',
        'symptoms_ur',
        'protection',
        'protection_ur',
        'recommended_control',
        'recommended_control_ur',
        'urdu_completed',
    ];

    public function crop()
    {
        return $this->belongsTo(Crop::class);
    }
}
