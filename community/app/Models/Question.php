<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [

        'user_id',

        'category',

        'question_text',

        'question_image',

        'question_voice',

        'status',

    ];


    

    protected $casts = [

        'question_voice' => 'array',

    ];


    

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }
}
