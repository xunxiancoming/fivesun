<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1.0 ,user-scalable=0" > --}}
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>五个太阳官网</title>
    <link rel="icon" href="{{asset('images/logo-icon.ico')}}" type="image/x-icon">
    <link href="https://cdn.bootcss.com/twitter-bootstrap/4.3.1/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/index.css')}}" media="screen and (min-width:800px)">
    <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
    <script src="https://cdn.bootcss.com/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://cdn.bootcss.com/twitter-bootstrap/4.3.1/js/bootstrap.js"></script>

</head>
<body>
    <header>
        @include('layout.header')
    </header>
    <section>
        @yield('content')
    </section>
    <footer>
        @include('layout.footer')
    </footer>

    <div class="top">
        <a href="#top"> <img src="{{asset('images/top.png')}}" alt="" > </a>
    </div>
    <script>
        $(function(){
            $('.carousel-item').first().addClass('active');
            console.log($('.carousel-inner').first());
        })
    </script>
    @yield('script')
</body>
</html>