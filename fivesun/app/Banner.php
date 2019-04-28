<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $table = 'banneritem';

    public function city()
    {
        return $this->belongsTo('App\City');
    }

    public function banners($id,$city_id)
    {
        $banners = Banner::where(['city_id'=>$city_id,'banner_id'=>$id])->orderBy('order','asc')->get();
        return $banners;
    }
}
