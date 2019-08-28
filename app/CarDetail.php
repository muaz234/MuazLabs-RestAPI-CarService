<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarDetail extends Model
{
    //

    protected $fillable = ['owner_name', 'plate_no', 'car_brand_id', 'car_model_name', 'bought_on', 'current_mileage', 
                            'road_tax_expiry', 'insurance_provider', 'in_use'];
}
