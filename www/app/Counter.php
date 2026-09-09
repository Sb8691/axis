<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Counter extends Model
{
    protected $fillable = [
      'icon', 'title', 'subtitle', 'target_number', 'time', 'has_icon', 'has_title', 'has_subtitle', 'has_time'
    ];
}
