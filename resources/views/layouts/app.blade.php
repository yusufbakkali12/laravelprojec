<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'factuer') }}</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    {{-- <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet"> --}}

    <!-- App CSS -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link id="theme-style" rel="stylesheet" href="{{ asset("assets/css/portal.min.css")}} ">
    <link id="theme-style" rel="stylesheet" href="{{ asset("assets/css/select.css")}} ">
    {{-- <link id="theme-style" rel="stylesheet" href="{{ asset("assets/css/slimselect.css")}} "> --}}





    <!-- Scripts -->
</head>
<body>
    <div id="app">
        @yield('content')
    </div>


    {{-- <script script> --}}
        {{-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script> --}}
        {{-- <script defer src=" {{ asset("assets/js/bootstrap.bundle.min.js") }}"></script> --}}
        {{-- <script defer src=" {{ asset("assets/js/popper.min.js") }}"></script> --}}
    <script defer src="{{asset("assets/js/package/interact.min.js")}}"></script>
    <script defer src="{{ asset("assets/js/package/n2words.js") }}"></script>
    <script defer src="{{ asset("assets/js/package/axios.min.js") }}" ></script>
 
    {{-- <script defer src=" {{ asset("assets/js/app.js") }}"></script> --}}
    <script defer src="{{ asset('assets/plugins/fontawesome/js/all.min.js') }}"></script>
    <script defer src="{{ asset("assets/js/Createfacture/addchane.js") }}"></script>
    <script defer  src="{{ asset("assets/js/Createfacture/calcule.js") }}" ></script>
    <script defer src="{{ asset("assets/js/Createfacture/index.js") }}" ></script>
    <script defer src="{{ asset("assets/js/Createfacture/interact.js") }}" ></script>
   
    {{-- <script script> --}}



    <!-- Page Specific JS -->
    <script defer src=" {{ asset("assets/js/app.js")}}"></script>
</body>
</html>
