<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class superAdmins extends Model
{
    protected $fillable = [

        'name',
        'email',
        'address',
        'phone_no',
        'related_branch',
        'one_time_pasword'

    ];
}
