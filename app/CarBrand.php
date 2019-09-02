<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarBrand extends Model
{
    //
    protected $fillable= ['brand_name', 'active'];

    public function carModel() {
        return $this->hasMany('CarModel');
    }

    
}
