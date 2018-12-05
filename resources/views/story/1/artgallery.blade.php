@extends('layouts/chapter')
@section("link")

@stop
@section('content')

<link rel="stylesheet" href="{{ URL::asset('css/artgallery.css') }} ">

<div id="left"></div>

<div id="wrapper">
<div id="carousel">
	<div class="imgBlock"><div id="div1"></div><img src="{{URL::asset('/images/lubeck/artdealer/one.jpg')}}" alt="" class="img">
<div class="heartBlock">
<i class="far fa-heart"></i>
<i id="like1" class="far fa-heart"></i>
</div>
</div>

<div class="imgBlock"><img src="{{URL::asset('/images/lubeck/artdealer/two.jpg')}}" alt="" class="img">
<div class="heartBlock">
<i class="far fa-heart"></i>
<i id="like2" class="far fa-heart"></i>
</div>
</div>

<div class="imgBlock"><img src="{{URL::asset('/images/lubeck/artdealer/three.jpg')}}" alt="" class="img">
<div class="heartBlock">
<i class="far fa-heart"></i>
<i id="like3" class="far fa-heart"></i>
</div>
</div>

<div class="imgBlock"><img src="{{URL::asset('/images/lubeck/artdealer/four.jpg')}}" alt="" class="img">
<div class="heartBlock">
<i class="far fa-heart"></i>
<i id="like4" class="far fa-heart"></i>
</div>
</div>

<div class="imgBlock"><img src="{{URL::asset('/images/lubeck/artdealer/five.jpg')}}" alt="" class="img">
<div class="heartBlock">
<i class="far fa-heart"></i>
<i id="like5" class="far fa-heart"></i>
</div>
</div>
<div class="imgBlock"><img src="{{URL::asset('/images/lubeck/artdealer/six.jpg')}}" alt="" class="img">
<div class="heartBlock">
<i class="far fa-heart"></i>
<i id="like6" class="far fa-heart"></i>
</div>
</div>

<div class="imgBlock"><img src="{{URL::asset('/images/lubeck/artdealer/seven.jpg')}}" alt="" class="img">
<div class="heartBlock">
<i class="far fa-heart"></i>
<i id="like7" class="far fa-heart"></i>
</div>
</div>

<div class="imgBlock"><img src="{{URL::asset('/images/lubeck/artdealer/nine.jpg')}}" alt="" class="img">
<div class="heartBlock">
<i class="far fa-heart"></i>
<i id="like8" class="far fa-heart"></i>
</div>
</div>
</div>
</div>

<div id="right"></div>
<script src="{{ URL::asset('js/artgallery.js') }}"></script>
@endsection 