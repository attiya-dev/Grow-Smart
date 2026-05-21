<?php

namespace App\Models;
use App\Models\CropDetail;
use Illuminate\Database\Eloquent\Model;

class Crop extends Model
{
     protected $table = 'crops';
     protected $fillable = [
        'image',
        'name',
        'season',
        'type'
    ];
    public function detail()
    {
        return $this->hasOne(CropDetail::class, 'crop_id');
    }
}
