<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    //
    protected $fillable= ['name', 'car_brand_id'];

    public function carBrand() {
        return $this->belongsTo('App\CarBrand');
    }
}
