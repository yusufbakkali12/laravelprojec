


@extends('layouts.app')

@section('content')
    @include('components.navbar')
    <!--//app-header-->




 <div class="app-wrapper">

    <div class="app-content pt-3 p-md-3 p-lg-4">
        <h1 class="app-page-title">Overview</h1>
        <div class="container-xl d-flex justify-content-center">
            <img height="550" src="{{asset('assets/images/background/working.svg')}}" alt="">

        </div><!--//container-fluid-->
        <h1 class="app-page-title text-center mt-5"> </h1>
    </div><!--//app-content-->



</div><!--//app-wrapper-->
@endsection
