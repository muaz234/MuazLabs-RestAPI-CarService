<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InsuranceProvider extends Model
{
    protected $fillable = ['name', 'short_name', 'active', 'car_detail_id'];

    public function carDetail() {
        return $this->hasMany('App\CarDetail');
    }
}