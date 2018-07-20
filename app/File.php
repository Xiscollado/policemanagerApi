<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $connection = 'vrp';
    protected $table = 'vrp_user_identities';

    public function policeRecords()
    {
        return $this->hasMany('App\UserData', 'user_id', 'user_id');
    }

    public function vehicles()
    {
        return $this->hasMany('App\Vehicle', 'user_id', 'user_id');
    }

    public function homes()
    {
        return $this->hasMany('App\Home', 'user_id', 'user_id');
    }

    public function money()
    {
        return $this->hasOne('App\Money', 'user_id', 'user_id');
    }

    public function business()
    {
        return $this->hasOne('App\Business', 'uid', 'user_id');
    }

    public function details()
    {
        return $this->hasOne('App\FileDetails', 'user_id', 'user_id');
    }
}
