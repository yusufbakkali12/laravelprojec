<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- App CSS -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link id="theme-style" rel="stylesheet" href="{{ asset("assets/css/portal.min.css")}} ">
    <link id="theme-style" rel="stylesheet" href="{{ asset("assets/css/select.css")}} ">
    <link id="theme-style" rel="stylesheet" href="{{ asset("assets/css/notification.css")}} ">
    <!-- Scripts -->
</head>
<body>
    <div id="app">



<div class="app app-404-page mb-5">

    <div class="container my-5">
	    <div class="row">
            <div class="app-branding text-center my-5">

                <img height="70" class="me-2" src="{{url('assets/images/app-log.png')}}" alt="logo">

                <p class="text-primary fw-bold fs-3">{{ __('STE.OUARCHATE ') }}<span class="text-info" style="text-decoration:underline;text-decoration-style:wavy;text-decoration-color:#C53F3F">AL ASDIQAE.SARL</span></p>

            </div><!--//app-branding-->
		    <div class="col-12 col-md-11 col-lg-7 col-xl-6 mx-auto">

			    <div class="app-card p-5 text-center shadow-sm mt-5">
				    <h1 class="page-title mb-4">404<br><span class="font-weight-light">Page Not Found</span></h1>
				    <div class="mb-4">
					    Sorry, we can't find the page you're looking for.
				    </div>

				    <a class="btn app-btn-primary" href="{{route('orders.index')}}">Go to home page</a>
			    </div>
		    </div><!--//col-->
	    </div><!--//row-->
    </div><!--//container-->

</div>


    </div>
    {{-- <script script> --}}

    <script defer src="{{ asset("assets/js/axios.min.js") }}" ></script>
    {{-- <script defer src="{{ asset("assets/js/bootstrap.bundle.min.js") }}" ></script> --}}
    <script defer src=" {{ asset("assets/js/app.js") }}"></script>
    <script defer src=" {{ asset('assets/plugins/fontawesome/js/all.min.js') }}"></script>
    <script defer src=" {{ asset("assets/js/Createfacture/jsPdf/jsPdf.js") }}"></script>
    <script defer src=" {{ asset("assets/js/Createfacture/jsPdf/GeneratePDF.js") }}"></script>
    <script defer src=" {{ asset("assets/js/Createfacture/addchane.js") }}"></script>
    <script defer src=" {{ asset("assets/js/Createfacture/calcule.js") }}"></script>
    <script defer src=" {{ asset("assets/js/Createfacture/myscript.js") }}"></script>
    <script defer src=" {{ asset("assets/js/Createfacture/n2words.js") }}"></script>
    <script defer src=" {{ asset("assets/plugins/popper.min.js") }}"></script>
    {{-- <script script> --}}

        <script src="{{asset("assets/js/notification.js")}} "></script>


    <!-- Page Specific JS -->
    {{-- <script src="assets/js/app.js"></script> --}}
</body>
</html>
