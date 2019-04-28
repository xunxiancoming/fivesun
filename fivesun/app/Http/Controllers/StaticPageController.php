<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
use App\Ads;
use App\Status;
use App\Agency;
use App\City;
use View;

class StaticPageController extends Controller
{

    public function parameter($id)
    {
        if($id->id){
            $agency = Agency::find($id->id);
            View::share('agency',$agency);
            return $id->id;
        }else{
            $agency = Agency::find(1);
            View::share('agency',$agency);
            return 1;
        }
    }

    public function home(Request $request,City $city)
    {
 
        $city_id = $this->parameter($city);
        $banner = new Banner();
        $banners = $banner->banners(1,$city_id);

        $ad = new Ads();
        $ads = $ad->ads(1,$city_id);
        return view('static.home',compact(['banners','ads','city_id']));
    }

    public function machine(City $city)
    {
        $city_id = $this->parameter($city);

        $banner = new Banner();
        $banners = $banner->banners(2,$city_id);

        $ad = new Ads();
        $ads = $ad->ads(2,$city_id);
        $adsFieldOne = $ads[0];
        $adsFieldTwo = $ads[1];

        return view('static.machine',compact(['banners','adsFieldOne','adsFieldTwo','city_id']));
    }

    public function beanmilk(City $city)
    {
        $city_id = $this->parameter($city);

        $ad = new Ads();
        $ads = $ad->ads(3,$city_id);
        $adsFieldOne = $ads[0];
        return view('static.beanmilk',compact(['adsFieldOne','city_id']));
    }

   
    public function status(City $city)
    {
        $city_id = $this->parameter($city);
    
        $ad = new Ads();
        $ads = $ad->ads(4,$city_id);
        $adsFieldOne = $ads[0];

        $status = new Status();
        $ostatuses = $status->statuses($city_id);
        $statuses = $ostatuses->groupBy('date')->toArray();
        return view('static.status',compact(['adsFieldOne','statuses','ostatuses','city_id']));
    }

    public function post(City $city,Status $status)
    {
        $city_id = $this->parameter($city);

        $id = $status->id;
        $status->browser = ($status->browser)+1;
        $status->save();
        $statusesIds = Status::where('city_id',$city_id)->pluck('id')->toArray();
        
        sort($statusesIds);
        $previous = Status::where('city_id',$city_id)->where('id','<',$id)->orderBy('id','desc')->first();
        $next = Status::where('city_id',$city_id)->where('id','>',$id)->orderBy('id','asc')->first();
        return view('static.post',compact(['status','previous','next','city_id']));
    }

    public function contact(City $city)
    {
        $city_id = $this->parameter($city);

        $agency = new Agency();
        $agencies = $agency->agencies();
        return view('static.contact',compact('agencies','city_id'));
    }
}


