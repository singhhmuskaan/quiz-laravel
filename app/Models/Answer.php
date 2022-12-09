<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }
    function question()
    {
        return $this->belongsTo(Question::class);
    }
    function option(){
        return $this->belongsTo(Option::class);
    }
}
