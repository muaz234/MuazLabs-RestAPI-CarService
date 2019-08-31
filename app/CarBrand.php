<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarBrand extends Model
{
    //
    protected $fillable= ['brand_name', 'active', 'car_detail_id'];

    public function carDetail() 
    {
        return $this->belongsTo('App\CarDetail');
    }

    public function carModel() {
        return $this->hasMany('CarModel');
    }

    
}
