@extends('layout.main')
@section('content')
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1" ></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      @foreach ($banners as $banner)
        <div class="carousel-item slide">
          <a href="{{$banner->navigate_to?route('post',[$city_id,$banner->navigate_to]):'javascript:;'}}">
            <img class="d-block w-100" src="{{$banner->url}}" alt="{{$banner->description}}">
          </a>
        </div>
      @endforeach
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<div class="topicOne">
    <div class="topicOneTitle">
        豆浆文化
    </div>
    <div class="topicOneImage">
        @foreach($ads as $ad)
        <div class="topicOneImageBox">
          <a href="{{$ad->navigate_to?route('post',[$city_id,$ad->navigate_to]):'javascript:;'}}">
            <img src="{{$ad->url}}" alt="{{$ad->description}}">
          </a>
        </div>
        @endforeach
    </div>
</div>
@stop
