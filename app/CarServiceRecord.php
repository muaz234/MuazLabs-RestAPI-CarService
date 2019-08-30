<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarServiceRecord extends Model
{
    //
    protected $fillable = ['car_detail_id', 'part_changed', 'total_cost', 'receipt', 'mileage', 'service_on', 'remarks'];

    public function carDetail() {
        return $this->belongsTo('App\CarDetail');
    }


}
