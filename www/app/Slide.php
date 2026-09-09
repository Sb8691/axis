<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    protected $fillable = [
        'slider_id', 'title', 'subtitle', 'description', 'button_text', 'button_text_2', 'button_link', 'button_link_2',
        'has_subtitle', 'has_description', 'has_button', 'has_button_2', 'path', 'is_public'
    ];

    public function settings(){
        return $this->hasOne('App\SlideSetting');
    }
}
