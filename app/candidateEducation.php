<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class candidateEducation extends Model
{
    protected $fillable = [

        'degree',
        'school_type',
        'school_name',
        'city',
        'country',
        'state',
        'enrolldate',
        'still_studying',
        'grad_date',
        'exp_graddate',
        'is_graduated',
        'lastenrollyear',
        'future_study',
        'field_of_study',

    ];
}
