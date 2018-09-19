<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $fillable = [
        'name',
        'email',
        'address',
        'phone_no',
        'related_branch',
        'one_time_pasword',
        'super_admin_signature_id'
    ];

    public function superAdmins(){
        return $this->belongsTo('App\superAdmins');
    }
}
