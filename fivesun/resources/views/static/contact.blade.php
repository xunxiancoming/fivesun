@extends('layout.main')
@section('content')
<div class="contact">
    <div class="contact-box">
        <div class="joinUs">
            加盟我们
        </div>
        @foreach($agencies as $agency)
        <div class="contactList row">
            <div class="contactImg col-sm-auto">
                <img src="#" alt="">
            </div>
            <div class="contactInfo col-sm-auto">
                <ul>
                    <li>城&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;市 <span>{{$agency->city}}</span> </li>
                    <li>公司名称 <span>{{$agency->company}}</span></li>
                    <li>联&nbsp;&nbsp;系&nbsp;&nbsp;人 <span>{{$agency->contact}}</span></li>
                    <li>加盟电话 <span>{{$agency->phone}}</span></li>
                    <li>地&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;址 <span>{{$agency->address}}</span></li>
                </ul>
            </div>
        </div>
        @endforeach
    </div>
</div> 
@endsection
