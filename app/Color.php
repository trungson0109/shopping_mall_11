<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    protected $fillable = [
        'id',
        'name',
    ];

    public $timestamps = false;

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
