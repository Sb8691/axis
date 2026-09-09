<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Logo extends Model
{
    protected $fillable = ['logos_list_id', 'path', 'link', 'alt', 'sort'];
}
