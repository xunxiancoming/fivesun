<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ads extends Model
{
    protected $table = 'ads';

    public function city()
    {
        return $this->belongsToMany('App\City');
    }

    public function page()
    {
        return $this->belongsToMany('App\Page');
    }

    public function status()
    {
        return $this->belongsToMany('App\Status');
    }

    public function ads($id,$city_id)
    {
        $ads = Ads::where(['city_id'=>$city_id,'ad_belong'=>$id])->get();
        return $ads;
    }

    
}
