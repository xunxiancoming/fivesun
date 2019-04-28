<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
    protected $table = 'agencies';

    public function city()
    {
        return $this->belongsTo('App\City');
    }

    public function agencies()
    {
        $agencies = Agency::all();
        return $agencies;
    }
}
