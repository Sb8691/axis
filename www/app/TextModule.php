<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TextModule extends Model
{
    protected $fillable = [
        'title', 'content', 'content_2'
    ];
}
