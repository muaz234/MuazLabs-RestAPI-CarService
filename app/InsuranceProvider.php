<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InsuranceProvider extends Model
{
    protected $fillable = ['name', 'short_name', 'active'];

    public function carDetail() {
        return $this->belongsTo('App\CarDetail');
    }
}