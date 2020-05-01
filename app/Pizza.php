<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    protected $guarded = [];

    public function category()
    {
    return $this->belongsTo('App\Category','category_id');
    }
    public function image()
    {
    return $this->hasMany('App\PizzaImage');
    }
}
