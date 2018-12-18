<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<link href="{{ asset('css/splash.css') }}" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=MedievalSharp|Open+Sans|Almendra|Merriweather" rel="stylesheet">

<body>
<img src="../images/character-splash.png" id="character">
<div class="headtitle">
    <h1 id="title">EduStory<h1>
    <h2 id="subtitle">Het Hanze avontuur</h2>
</div>
<button id="infobutton"><img src="../images/info.svg" id="info-icon"></button>
<div id="infomodal" class="modal">
    <div class="modal-content">
            <h2 id="info-title">Over Edustory</h2>
            <p>EduStory is een educatief en interactief verhaal, gericht op basisschool kinderen van groep 7/8,
                gemaakt door 5 junior webdevelopers uit Groningen met een passie voor geschiedenis met als doel het leren leuk te maken.
            </p>
            <p>Wij hebben geprobeerd zo historisch accuraat mogelijk te werk te gaan. Onze focus ligt echter bij het programmeren en zodoende garanderen we geen volledige correctheid.
            </p>
            <p>De EduStory beleving is optimaal op een groot scherm of iPad.</p>
    </div>
</div>
<div class="container">
    <h2>Hallo Reiziger!</h2>
    <p>Welkom bij EduStory: het Hanze avontuur.<br> Ben je nieuw hier of ben je hier al eerder geweest?</p>
@guest
<div class="buttons">

    <a class="nav-link" href="{{ route('login') }}"><button class="nav-item">{{ __('Inloggen') }}</button></a>


    @if (Route::has('register'))
        <a class="nav-link" href="{{ route('register') }}"><button class="nav-item">{{ __('Registreren') }}</button></a>
    @endif

</div>
@else
<div class="buttons">
    <a class="nav-link" href="/chapters/prologue"><button class="nav-item">{{ __('Proloog') }}</button></a>
        <a href="{{ route('logout') }}"
           onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">

        <button class="nav-item">Uitloggen</button>
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
</div>
@endguest
</div>
<script src="{{ asset('js/infomodal.js') }}"></script>
</body>
@section('scripts')

@endsection