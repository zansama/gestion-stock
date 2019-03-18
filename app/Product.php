<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table ='products';

    protected $fillable = [
        'name', 'description', 'image', 'user_id'
    ];


    public function user(){
        return $this->belongsTo('App\User');
    }

    public function category(){
        return $this->hasOne('App\product_categories');
    }
}
