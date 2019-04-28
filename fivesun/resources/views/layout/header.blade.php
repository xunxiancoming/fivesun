<div class="nav">
    <div class="logo"><a class="navbar-brand" href="{{route('home',$city_id)}}"><img src="{{asset('images/logo.png')}}" alt="五个太阳"></a></div>
    <div class="navbar">
        <a class="nav-item nav-link active" href="{{route('home',$city_id)}}">首页 <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link" href="{{route('machine',$city_id)}}">豆浆机</a>
        <a class="nav-item nav-link" href="{{route('beanmilk',$city_id)}}">豆浆粉</a>
        <a class="nav-item nav-link" href="{{route('status',$city_id)}}">公司动态</a>
        <a class="nav-item nav-link" href="{{route('contact',$city_id)}}">加盟</a>
        
    </div>
    <div class="dropdown">
        <button class="btn btn-pink dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{$agency->city}}
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
            @foreach($cities as $city)
                <a class="dropdown-item" href="{{route('home',$city->id)}}">{{$city->city}}</a>
            @endforeach
        </div>
    </div>
</div>
