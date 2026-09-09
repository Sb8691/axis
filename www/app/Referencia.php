<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Referencia extends Model
{
    protected $fillable = ['sort', 'category_id','gallery_path', 'header_path', 'name', 'perex', 'content'];

    public function getURL() {
        return '/referencia/' . $this->id . '-' . strtolower(preg_replace('/[^a-z0-9]+/i', '-', iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', $this->name)));
    }

    public function parameters() {
        return $this->hasMany('App\ReferenciaParameter', 'referencia_id')->orderBy('sort');
    }
}
