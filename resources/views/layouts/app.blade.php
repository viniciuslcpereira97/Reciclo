<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reciclô</title>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/all.css') }}"/>
    <link type="text/css" rel="stylesheet" href="{{ asset('css/app.css') }}"/>
    <script src="https://www.gstatic.com/firebasejs/3.1.0/firebase.js"></script>
    <script type="text/javascript" src="{{ asset('js/all.js') }}"></script>
    <style type="text/css">
        body {
            margin: 10px;
        }
    </style>
</head>
<body class="grey lighten-3 ">
    <div class="container-fluid">
        @include('partials.header')
        @yield('content')
        @include('partials.footer')
    </div>
</body>
</html>
