<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class candidateWorkExp extends Model
{
    protected $fillable = [
        
        'employername',
        'industry',
        'city',
        'country',
        'state',
        'position',
        'start_date',
        'end_date',
        'still_working',
        'salary',

    ];
}
