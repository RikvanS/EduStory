<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<link href="{{ asset('css/splash.css') }}" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=MedievalSharp|Open+Sans|Almendra|Merriweather" rel="stylesheet">

<div class="headtitle">
    <h1 id="title">EduStory<h1>
    <h2 id="subtitle">Het Hanze avontuur</h2>
</div>
<button id="infobutton"><img src="../images/info.svg" id="info-icon"></button>
<div id="infomodal" class="modal">
    <div class="modal-content">
            <h2 id="info-title">Over Edustory</h2>
            <p>EduStory is een educatief en interactief verhaal, gericht op basisschool kinderen van groep 7 en 8.
   Deze website is vrij om te gebruiken, voor beide het gebruik thuis alsmede op school.
   Als richtlijnen houden wij bij onze stof de leerlijnen van Nationaal Expertisecentrum Leerplanontwikkeling SLO aan.
   <br><br>Het bedrijf achter EduStory is Pixel Monkeys, die bestaat uit 5 web designers uit Groningen.
   Bij Pixel Monkeys draait een product om inhoud, vormgeving en een positieve user experience.</p>
    </div>
</div>
<div class="container">
    <h2>Hallo reiziger!</h2>
    <p>Welkom bij EduStory: het Hanze avontuur.<br> Ben je nieuw hier of ben je hier al eerder geweest?</p>
@guest
<div class="buttons">

    <a class="nav-link" href="{{ route('login') }}"><button class="nav-item">{{ __('Inloggen') }}</button></a>


    @if (Route::has('register'))
        <a class="nav-link" href="{{ route('register') }}"><button class="nav-item">{{ __('Registreren') }}</button></a>
    @endif

</div>
@else
<li class="nav-item">
    <a class="nav-link" href="/chapters/prologue">{{ __('Proloog') }}</a>
</li>
<li class="nav-item dropdown">
    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
        {{ Auth::user()->name }} <span class="caret"></span>
    </a>

    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
</li>
@endguest
</div>
<script src="{{ asset('js/infomodal.js') }}"></script>
@section('scripts')

@endsection