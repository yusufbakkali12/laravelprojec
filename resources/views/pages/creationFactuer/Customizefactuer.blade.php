@extends('layouts.app')

@section('content')
    <!--//app-header-->
        @include('components.navbar')
    <!--//app-header-->
    <!--//app-wrapper-->
        <div class="app-wrapper">
            <!--//app-content-->
            <div class="app-content pt-3 p-md-3 p-lg-3">

                <div class="container-xl tab-content">
                    <h1 class="app-page-title">Overview</h1>

                    {{-- nav tamplent --}}
                        @include('components.componentsCustomize.NavTamplent') 
                    {{-- nav tamplent --}}

                    
                    {{-- <!--//tab-content Customize--> --}}	
                        @include('components.componentsCustomize.ContentCustomize')  
                    {{--tab-content Customize--}}


                    {{-- tab-content templent--}}
                        @include('components.componentsCustomize.ContentTemplent')
                    {{--tab-content templent--}}

                </div>
                <!--//container-fluid-->
            </div>
            <!--//app-content-->


            @include('components.componentsCustomize.toastt')
            
        </div>
    <!--//app-wrapper-->


@endsection
