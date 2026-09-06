<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExpertHiddenUser extends Model
{
    protected $table = 'expert_hidden_users';

    protected $fillable = [
        'expert_id',
        'user_id',
        'category',
    ];
}
