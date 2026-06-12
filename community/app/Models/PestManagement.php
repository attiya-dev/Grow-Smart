<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PestManagement extends Model
{
    protected $table = 'pest_managements';
    protected $fillable = [
        'crop_id',
        'crop_name',
        'name',
        'type',
        'how_it_occurs',
        'symptoms',
        'protection',
        'recommended_control',
    ];

    public function crop()
    {
        return $this->belongsTo(Crop::class, 'crop_id');
    }
}