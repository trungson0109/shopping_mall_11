<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'id',
        'name',
        'guarantee',
        'hot',
        'price',
        'sale_percent',
        'quantity',
        'description',
        'status',
    ];

   public function color()
    {
        return $this->belongsTo(Color::class);
    }

    public  function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
