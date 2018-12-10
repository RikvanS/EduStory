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
            <p>EduStory is een educatief en interactief verhaal, gericht op basisschool kinderen van groep 7 en 8.
   Deze website is vrij om te gebruiken, voor beide het gebruik thuis alsmede op school.
   Als richtlijnen houden wij bij onze stof de leerlijnen van Nationaal Expertisecentrum Leerplanontwikkeling SLO aan.
   <br><br>Het bedrijf achter EduStory is Pixel Monkeys, die bestaat uit 5 web designers uit Groningen.
   Bij Pixel Monkeys draait een product om inhoud, vormgeving en een positieve user experience.</p>
    </div>
</div>
<div class="container">
    <h2>{{ __('Inloggen') }}</h2>
    <div class="">
        <form method="POST" action="{{ route('login') }}">
        @csrf
            <div class="">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Adres') }}</label>
                <div>
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} field" name="email" value="{{ old('email') }}" required>
                </div>
            </div>
            <div class="">
                <label for="password" class="">{{ __('Wachtwoord') }}</label>
                <div class="">
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} field" name="password" required>
                </div>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="remember">
                    {{ __('Onthoud Mij') }}
                </label>
            </div>
            <button type="submit" class="nav-item" id="register-btn">
                {{ __('Inloggen') }}
            </button>
        </form>
        @if ($errors->any())
        <div class="notification">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
</div>
<script src="{{ asset('js/infomodal.js') }}"></script>
</body>

