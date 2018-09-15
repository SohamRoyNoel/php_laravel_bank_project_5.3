<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class new_accounts extends Model
{
    protected $fillable = [

        'phone',
        'aadhaar',
        'pan',
        'name',
        'sex',
        'address',
        'email',
        'dob'

    ];
}
