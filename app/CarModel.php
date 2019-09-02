<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    //
    protected $fillable= ['name', 'car_brand_id', 'car_detail_id'];

    public function carBrand() {
        return $this->belongsTo('App\CarBrand');
    }

    public function carDetail() {
        return $this->hasMany('App\CarDetail');
    }
}
