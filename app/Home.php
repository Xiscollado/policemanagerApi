<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    protected $connection = 'vrp';
    protected $table = 'vrp_user_homes';

    public function file()
    {
        return $this->belongsTo('App\File', 'user_id', 'user_id');
    }
}
