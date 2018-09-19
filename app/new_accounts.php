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
        'isAuthenticated',
        'account_no'

    ];

    public function isActivated(){
        if ($this->isAuthenticated == '1'){
            return true;
        }
        return false;
    }
}
