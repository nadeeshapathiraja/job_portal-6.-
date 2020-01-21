<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class candidateLanguage extends Model
{
    protected $fillable = [

        'language_code',
        'spoken_level',
        'written_level',
        'default',
        
    ];
}
