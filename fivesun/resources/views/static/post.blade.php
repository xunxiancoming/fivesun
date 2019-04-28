@extends('layout.main')
@section('content')
<div class="post">
    <div class="post-box">
        <div class="postUrl">
            位置
            <span><a href="{{route('status',$city_id)}}" class="address">公司动态</a> 》</span>
        </div>
        <div class="postTitle">
            <h5>{{$status->title}}</h5>
        </div>
        <div class="label">
            <p>{{$status->author}} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$status->created_at->diffForHumans()}} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="iconfont">&#xe6c6;{{$status->browser}}</span></p>
        </div>
        <div class="postContent">
            <p>{{$status->content}}</p>
        </div>
    
        <div class="gotoLink">
            @if($previous)
                <a href="{{route('post',[$city_id,$previous])}}" class="float-lelft">← {{$previous->title}}</a>
            @else
                <a href="javascript:;" class="float-lelft light">← 没有了</a>
            @endif
            
            @if($next)
                <a href="{{route('post',[$city_id,$next])}}" class="float-right">{{$next->title}} →</a>
            @else
                <a href="javascript:;" class="float-right light"> 没有了 →</a>
            @endif
        </div>
    </div>
</div>
@endsection