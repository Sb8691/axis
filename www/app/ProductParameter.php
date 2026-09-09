<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductParameter extends Model
{
    protected $fillable = ['product_id', 'parameter', 'description'];
}
