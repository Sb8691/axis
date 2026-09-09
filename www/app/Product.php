<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'path', 'perex', 'description'];

    public function params() {
        return $this->hasMany('App\ProductParameter');
    }

    public function categories() {
        return $this->belongsToMany('App\ProductCategory', 'product_category_product');
    }
}
