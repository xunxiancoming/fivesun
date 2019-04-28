@extends('layout.main')
@section('content')
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        @foreach ($banners as $banner)
            <div class="carousel-item">
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

<div class="summary">
    <div class="summaryText">
        <ul>
            <li class="summary-item">
                <p class="title">节能</p>
                <p>最高功率1600W</p>
            </li>
            <li class="summary-item">
                <p class="title">高效</p>
                <p>10秒即热出浆</p>
            </li>
            <li class="summary-item">
                <p class="title">智能</p>
                <p>智能调节水温、水量</p>
            </li>
            <li class="summary-item">
                <p class="title">持续</p>
                <p>连续制浆不停歇</p>
            </li>
            <li class="summary-item">
                <p class="title">简单</p>
                <p>可拆卸，易清洗</p>
            </li>
            <li class="summary-item">
                <p class="title">时尚</p>
                <p>电容屏触控，简约大气</p>
            </li>
            <li class="summary-item">
                <p class="title">省心</p>
                <p>缺水自动提示</p>
            </li>
            <li class="summary-item">
                <p class="title">互联网+</p>
                <p>先进的物联网功能<br>精细化管理</p>
            </li>
        </ul>
    </div>
</div>

<div class="adMiddle">
    <a href="{{$adsFieldTwo->navigate_to?route('post',[$city_id,$adsFieldTwo->navigate_to]):'javascript:;'}}"><img src="{{$adsFieldOne->url}}" alt="{{$adsFieldOne->description}}"></a>
</div>

<div class="specification">
    <ul>
        <li class="specification-item">
            <p>AC220V/50Hz</p>
            <p class="title">电源</p>
        </li>
        <li class="specification-item">
            <p>制热1600W,制冷85W</p>
            <p class="title">功率</p>
        </li>
        <li class="specification-item">
            <p>655x290x420mm</p>
            <p class="title">机器规格</p>
        </li>
        <li class="specification-item">
            <p>半导体芯片制冷</p>
            <p class="title">制冷方式</p>
        </li>
        <li class="specification-item">
            <p>17.5KG</p>
            <p class="title">机器净重</p>
        </li>
        <li class="specification-item">
            <p>热胆容量1.8L，冷胆容量0.8L</p>
            <p class="title">内存水量</p>
        </li>
        <li class="specification-item">
            <p>3个料盒各装1KG</p>
            <p class="title">原料存量</p>
        </li>
        <li class="specification-item">
            <p>默认上置桶装水可选配<br>下抽水泵或外接净水装置</p>
            <p class="title">供水方式</p>
        </li>
    </ul>
</div>

<div class="adBottom">
        <a href="{{$adsFieldTwo->navigate_to?route('post',[$city_id,$adsFieldTwo->navigate_to]):'javascript:;'}}"><img src="{{$adsFieldTwo->url}}" alt="{{$adsFieldTwo->description}}"></a>
</div>
@stop
@section('script')
    <script>
        $(function(){
            $($(".specification ul").find("li")[3]).css('border-right','0px');
            $($(".specification ul").find("li")[4]).css('border-bottom','0px');
            $($(".specification ul").find("li")[5]).css('border-bottom','0px');
            $($(".specification ul").find("li")[6]).css('border-bottom','0px');
            $($(".specification ul").find("li")[7]).css({'margin-top':'-24px','border-bottom':'0px','border-right':'0px'});
        })
    </script>
@stop