<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CTA extends Model
{
    protected $fillable = [
        'title', 'subtitle', 'button_link', 'button_text'
    ];
}
