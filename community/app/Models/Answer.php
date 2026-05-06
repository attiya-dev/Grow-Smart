<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $table = 'answers';
    protected $fillable = [
        'question_id',
        'expert_id',
        'answer_text',
        'answer_image',
    ];

    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function expert()
    {
        return $this->belongsTo(User::class, 'expert_id');
    }
}
