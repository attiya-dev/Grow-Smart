<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Crop extends Model
{
    protected $table = 'crops';

    protected $casts = [
        'urdu_completed' => 'boolean',
    ];

    protected $fillable = [
        'image',
        'name',
        'name_ur',
        'season',
        'type',
        'category',
        'urdu_completed',
    ];

    public function cropDetail()
    {
        return $this->hasOne(CropDetail::class);
    }

    public function pestManagements()
    {
        return $this->hasMany(PestManagement::class);
    }
}
