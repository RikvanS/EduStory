@extends('layouts/chapter')
@section("link")


@stop
@section('content')
<link rel="stylesheet" href="{{ URL::asset('css/artgallery.css') }} ">
<img src="{{URL::asset('/images/lubeck/artdealer.jpg')}}">



<div class="comments">
<div class="comment bubble1">
        Welkom bij een van de grootste kunsthandelaar van Lubeck. Wat kan ik voor je doen?

</div>



<div class="comment bubble2">
        <ul>

                <li> <button type="button" onclick="choice1()" class="choice" id="choice-1"><p>Ik heb een kunstwerk uit Nederland. </p></li>
                <li> <button type="button" onclick="choice2()" class="choice" id="choice-2"><p>Ik zou graag jullie kunst willen bekijken.  </p></li>
            </ul>

</div>


<div style="display:none;" id="reaction-1" class="comment bubble1">

        Ah, de beste kunstwerken komen uit Nederland.  Wat zou je er voor willen hebben?
</div>

<div style="display:none;" id="reaction-2" class="comment bubble2">
        <ul>

                <li> <button type="button" onclick="choice3()" class="reaction-1" id="choice-3"><p>Ik wil er 1000 penningen voor. </p></li>
                
            </ul>

</div>

<div style="display:none;" id="reaction-3" class="comment bubble1">

        De kunstwerken hier zijn erg duur, alleen de rijkste handelaren kunnen hier iets kopen. We hebben kunstenaars vanuit heel Europa die naar Lubeck komen om hun dure kunstwerken te verhandelen. Maak alsjeblieft niets stuk
</div>

<button style="display:none;" type="button" onclick="modal()" id="photogallery"  class="artgallery"><a> >Bekijk de gallerij </a>


</div>

<div style="display:block;" id="pgallery" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h1 id="map-title">Gallerij</h1>
            <div>Gallerij</div>
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

        </div>

</div>
    
<script src="{{ URL::asset('js/artdealer.js') }}"></script>
<script src="{{ URL::asset('js/artgallery.js') }}"></script>
@endsection