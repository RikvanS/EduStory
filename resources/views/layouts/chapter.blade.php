<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8"> <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1"> <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ URL::asset('css/chapters.css') }}">
    <link href="https://fonts.googleapis.com/css?family=MedievalSharp|Open+Sans|Almendra|Merriweather" rel="stylesheet"> 
    <script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
    <title>EduStory @yield('title')</title>
    @yield('head')
</head>
<body>


    
    @include('includes/sidebar')
    <div class="container">
        @yield('content')
              
    </div>
    <script src="{{ URL::asset('js/chapter.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/rigaeffect.js') }}"></script>

    @yield('scripts')
</body>
</html>