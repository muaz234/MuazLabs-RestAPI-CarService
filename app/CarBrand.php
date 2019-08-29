<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarBrand extends Model
{
    //
    protected $fillable= ['brand_name', 'active'];

    public function carBrand() 
    {
        return $this->belongsTo('App\CarDetail');
    }

    public function carModel() {
        return $this->hasOne('CarModel');
    }

    
}
