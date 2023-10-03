@extends('layouts.app')

@section('content')
    @include('components.navbar')


        <div class="app-wrapper">
            <div class="app-content pt-3 p-md-3 p-lg-4">
                <div class="container-xl">
                    <h1 class="app-page-title">Overview</h1>


                    <div class="col-12">
                        <div class="app-card app-card-chart h-100 shadow-sm">

                            <!--//app-card-header-->
                            <div class="app-card-body px-3 pt-0 px-lg-0">


                                <div class="ratio ratio-1x1">

                                    <iframe class="embed-responsive-item" src="{{asset("assets/images/invo.pdf#toolbar=0&readonly=true")}}" style="width: 100%; height: 100vh;border:none;scrollbar:0"   >

                                    </iframe>

                                </div>


                            </div>
                            <!--//app-card-body-->
                        </div>
                        <!--//app-card-->
                    </div>
                    <!--//col-->

                </div>
                <!--//container-fluid-->
            </div>
            <!--//app-content-->

            <!--//app-footer-->

        </div>
@endsection
