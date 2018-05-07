<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Update_User extends Model
{
    protected $fillable = [
        'id',
        'name',
        'password',
        'level',
        'phone',
        'address',
    ];

    public function isAdmin()
    {
        Config::get('app.isAdmin.level');
    }
}
