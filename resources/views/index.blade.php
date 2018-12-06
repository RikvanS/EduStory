<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<script src="{{ asset('js/infomodal.js') }}" defer></script>
<link href="{{ asset('css/infomodal.css') }}" rel="stylesheet">

<i class="fas fa-info-circle" id="infobutton"></i>
<div id="infomodal" class="modal">
    <div class="modal-content">
            <h1 id="info-title">Info</h1>
            <p>Info tekst gebied</p>
    </div>
</div>
@guest
<li class="nav-item">
    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
</li>
<li class="nav-item">
    @if (Route::has('register'))
        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
    @endif
</li>
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

