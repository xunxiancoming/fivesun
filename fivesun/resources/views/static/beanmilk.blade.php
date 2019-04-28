@extends('layout.main')
@section('content')
    <div class="adbean">
        <a href="{{$adsFieldOne->navigate_to?route('post',[$city_id,$adsFieldOne->navigate_to]):'javascript:;'}}"><img src="{{$adsFieldOne->url}}" alt="{{$adsFieldOne->description}}"></a>
    </div>

    <div class="product">
        <div class="product-box">
            <div class="title">
                产品
                <span>优质大豆，口味香醇</span>
            </div>
            <div class="left">
                <img src="{{asset('images/p1.png')}}" alt="">
                <p>采用先进的大豆加工工艺，以东北优质非转基因大豆为主要原料，采用失活软化、
                    超微化处理、杀菌、脱腥灭酶、低温浓缩、喷雾干燥等16道工序，打造五个太阳豆
                    浆的卓越品质，五个太阳豆浆不添加任何食用香料、香精，且有着安全可靠、溶解
                    度高、易存储。口感细腻顺滑、冷热皆宜、易于人体吸收等特点。</p>
            </div>
            <div class="right">
                <img src="{{asset('images/p2.png')}}" alt="">
                <p>东北优质非转基因大豆萃取的豆浆精华遇上养血美容的红枣，
                    经过科学配比，先进生产工艺，完美融合，五个太阳红枣豆浆
                    有红枣的香气，还有豆浆的醇厚，口感更丰富，营养也更全面</p>
            </div>
        </div>
    </div>

    <div class="product">
        <div class="product-box">
            <div class="title">
                工艺
                <span>16道工序萃取大豆精华</span>
            </div>
            <div class="productBg">
                <img src="{{asset('images/gongyi.png')}}" class="gongyi" alt="">
            </div> 
        </div>
    </div>
@endsection