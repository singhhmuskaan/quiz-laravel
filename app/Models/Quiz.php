<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Quiz extends Model
{
    use HasFactory;

    function questions(): HasMany
    {
        return $this->hasMany(Question::class);
    }
    function answers(){
        return $this->hasMany(Answer::class);
    }
}
