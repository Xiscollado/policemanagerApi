<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crime extends Model
{
    protected $table = "crimes";
    protected $fillable = [ 'id' ];
}
