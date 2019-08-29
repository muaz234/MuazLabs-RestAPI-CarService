<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarDetail extends Model
{
    //

    protected $fillable = ['owner_name', 'plate_no', 'car_brand_id', 'car_model_name', 'bought_on', 'current_mileage', 
                            'road_tax_expiry', 'insurance_provider_id', 'in_use'];

    public function carBrand() {
        return $this->hasOne('App\CarBrand');
    }
    
    public function carModel() {
        return $this->hasOne('App\CarModel');
    }

    public function insuranceProvider() {
        return $this->hasOne('App\InsuranceProvider');
    }

    public function carServiceChecklist() {
        return $this->belongsTo('App\CarServiceCheckList');
    }


}
