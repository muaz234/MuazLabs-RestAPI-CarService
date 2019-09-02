<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarDetail extends Model
{
    //

    protected $fillable = ['owner_name', 'plate_no', 'bought_on', 'current_mileage', 
                            'road_tax_expiry',  'in_use'];

    public function carModel() {
        return $this->belongsTo('App\CarModel');
    }

    public function insuranceProvider() {
        return $this->belongsTo('App\InsuranceProvider');
    }

    public function carServiceChecklist() {
        return $this->hasMany('App\CarServiceCheckList');
    }

    public function carServiceRecord() {
        return $this->hasMany('App\CarServiceRecord');
    }


}
