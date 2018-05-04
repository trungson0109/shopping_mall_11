<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'id',
        'name',
        'email',
        'phone',
        'address',
        'payment',
        'status',
        'note',
    ];

    public $timestamps = true;

    public function user()
    {
        return $this->belongsTo(Update_User::class);
    }
}
