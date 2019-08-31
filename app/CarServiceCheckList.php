<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarServiceCheckList extends Model
{
    //
    protected $fillable = ['title', 'expected_mileage', 'time_interval', 'car_detail_id', 'due_on', 'completed', 'remarks'];

    public function carDetail() {
        return $this->belongsTo('App\CarDetail');
    }

}
