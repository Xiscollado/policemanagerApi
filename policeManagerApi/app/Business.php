<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    protected $connection = 'vrp';
    protected $table = 'vrp_empresas';

    public function file()
    {
        return $this->belongsTo('App\File', 'user_id', 'uid');
    }
}
