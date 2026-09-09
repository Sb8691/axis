<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LogosList extends Model
{
    public function logos(){
        return $this->hasMany('App\Logo');
    }
}
