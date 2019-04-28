<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Status extends Model
{
    protected $table = 'statuses';
    protected $casts = [
        'created_at' => 'date',
    ];

    public function city()
    {
        return $this->belongsTo('App\City');
    }

    public function statuses($city_id)
    {
        $statuses = Status::where('city_id',$city_id)->paginate(6);
        return $statuses;
    }
}

