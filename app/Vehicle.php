<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $connection = 'vrp';
    protected $table = 'vrp_user_vehicles';

    public function file()
    {
        return $this->belongsTo('App\File', 'user_id', 'user_id');
    }
}
