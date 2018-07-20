<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserData extends Model
{
    protected $connection = 'vrp';
    protected $table = 'vrp_user_data';

    public function file()
    {
        return $this->belongsTo('App\File', 'user_id', 'user_id');
    }
}
