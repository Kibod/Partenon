<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">    
    <title>SZGR Partenon</title>
</head>
<body>

    <header class="main-header">
        @include('inc.navbar')
    </header>

    <div class="main-content-container">
        @yield('content')
    </div>

    <footer class="main-footer">
        @include('inc.footer')
    </footer>
    
    <script src="/js/observers.js"></script>

</body>
</html>