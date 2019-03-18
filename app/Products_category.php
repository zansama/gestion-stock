<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products_category extends Model
{
    protected $table = 'products_categories';

    protected $fillable = [
       'product_id', 'category_id'

    ];

    public function product(){
        return $this->belongsTo('App\Products');
    }

    public function categories(){
        return $this->hasMany('App\Category');
    }

}

