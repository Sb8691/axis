<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = [
      'path', 'gallery_id', 'description', 'tag_id', 'link', 'was_cropped'
    ];
}
