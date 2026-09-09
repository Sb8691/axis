<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable = ['is_public'];
    public function slides(){
        return $this->hasMany('App\Slide');
    }
}
