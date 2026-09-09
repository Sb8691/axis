<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SlideSetting extends Model
{
    protected $fillable = [
      'slide_id', 'title_Y_pos', 'title_X_pos', 'title_visibility', 'subtitle_Y_pos', 'subtitle_X_pos', 'subtitle_visibility', 'description_Y_pos', 'description_X_pos', 'description_visibility',
        'button_Y_pos', 'button_X_pos', 'button_visibility', 'button_2_Y_pos', 'button_2_X_pos', 'button_2_visibility', 'is_visibility_supported'
    ];
}
