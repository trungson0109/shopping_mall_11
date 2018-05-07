<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';

    protected $fillable = [
        'id',
        'title',
        'image',
        'content',
    ];

    public $timestamps = true;
}
