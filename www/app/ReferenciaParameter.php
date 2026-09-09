<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReferenciaParameter extends Model
{
    protected $fillable = ['sort', 'name', 'value', 'referencia_id'];
}
