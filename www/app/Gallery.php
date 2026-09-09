<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable = [
        'created_at', 'updated_at', 'name'
    ];
    public function photos(){
        return $this->hasMany('App\Photo', 'gallery_id');
    }
    public function tags(){
        return $this->hasMany('App\Tag', 'gallery_id');
    }
}
