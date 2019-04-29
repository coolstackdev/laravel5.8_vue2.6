<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Title -->
    <title>My Gear Rentals | Moadaty</title>
    
    <!-- Description -->
    <meta name="description" content="">
    
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/styles.min.css') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
        
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- SVG sprites -->
    <script>
        var ajax = new XMLHttpRequest();
        
        ajax.open('GET', 'img/sprites.svg', true);
        ajax.send();
        ajax.onload = function(e) {
        var div = document.createElement('div');
        
        div.innerHTML = ajax.responseText;
        document.body.insertBefore(div, document.body.childNodes[0]);
        };
    </script>
</head>
<body>  
    <div id="app">
        @yield("header")
        @yield("content")
        @yield("footer")
    </div>
</body>
</html>
