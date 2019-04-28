@extends('layout.main')
@section('content')

<div class="adbean">
        <a href="{{$adsFieldOne->navigate_to?route('post',[$city_id,$adsFieldOne->navigate_to]):'javascript:;'}}"><img src="{{$adsFieldOne->url}}" alt="{{$adsFieldOne->description}}"></a>
</div>
    @foreach ($statuses as $key=>$value)
        <div class="product">
            <div class="product-box">
                <div class="title">
                    动态
                    <span>{{date("Y-m-d",$key)}}</span>
                </div>
                @foreach($value as $post)
                    <div class="statuses">
                        <p class="statusTitle">{{$post['title']}}</p>
                        <p class="statusText">{{$post['content']}}<a href="{{route('post',['city_id'=>$city_id,$post['id']])}}">更多>>></a></p>
                    </div>
                @endforeach
            </div>
        </div>
    @endforeach

    <div class="product">
        <div class="product-box">
            {{$ostatuses->links()}}
        </div>
    </div>
@endsection