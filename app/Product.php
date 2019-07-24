<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function productImages()
    {
        return $this->hasMany('App\Image', 'product_id', 'id');
    }

    public function productCategory()
    {
        return $this->belongsTo('App\Category', 'category_id', 'id');
    }
}
