<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FileDetails extends Model
{
    protected $connection = 'mysql';
    protected $table = 'file_details';
    protected $fillable = ['user_id'];

    public function file()
    {
        return $this->belongsTo('App\File', 'user_id', 'user_id');
    }
}
