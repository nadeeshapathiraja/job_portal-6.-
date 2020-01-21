<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class candidatePreperence extends Model
{
    protected $fillable = [

        'specialization',
        'location_country',
        'location_state',
        'salary_currency',
        'salary_amount',

    ];
}
