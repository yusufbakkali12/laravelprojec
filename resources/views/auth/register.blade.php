@extends('layouts.app')

@section('content')
<div class="app app-signup p-0">
    <div class="row g-0 app-auth-wrapper">
	    <div class="col-12 col-md-7 col-lg-6 auth-main-col text-center p-5 mt-5">
		    <div class="d-flex flex-column align-content-end">
			    <div class="app-auth-body mx-auto">
				    <div class="app-auth-branding mb-3"><a class="app-logo" href="index.html">
                        <img class=" me-2" width="100px" height="100px" src="{{asset('assets/images/app-log.png')}}" alt="logo">
                    </a></div>
                    <h2 class="auth-heading text-center mb-5 text-danger fw-bolder ">
                        {{ __('STE.OUARCHATE ') }}<span class="text-info"> AL ASDIQAE.SARL</span>
                    </h2>


					<div class="auth-form-container text-start mx-auto">
                        <form class="auth-form auth-signup-form" method="POST" action="{{ route('register') }}">
                                @csrf
							<div class="email mb-3">
								<label class="sr-only" for="name">Your Name</label>
                                <input id="name" name="name" type="text" class="form-control signup-name @error('name') is-invalid @enderror" placeholder="Full name"  value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>
							<div class="email mb-3">
								<label class="sr-only" for="email">Your Email</label>
                                <input id="email" name="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email"  value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>
							<div class="password mb-3">
								<label class="sr-only" for="password">Password</label>
                                <input id="password" name="password" type="password" class="form-control signup-password @error('password') is-invalid @enderror" placeholder="Create a password"   required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div><!--//extra-->
                            <div class="password mb-5">
								<label class="sr-only" for="password-confirm">Confirm Password</label>
                                <input id="password-confirm" type="password" class="form-control signup-password" name="password_confirmation" placeholder="Confirm a password" required autocomplete="new-password">
							</div><!--//extra-->

							<div class="text-center">
								<button type="submit" class="btn  btn-danger text-white w-100 theme-btn mx-auto">Sign Up</button>
							</div>
						</form><!--//auth-form-->
						<div class="auth-option text-center pt-5">Already have an account? <a class="text-link" href="{{ route('login') }}" >Log in</a></div>
					</div><!--//auth-form-container-->
    		    </div><!--//auth-body-->
		    </div><!--//flex-column-->
	    </div><!--//auth-main-col-->
	    <div class="col-12 col-md-5 col-lg-6 h-100 auth-background-col">
            <div class="auth-background-holder ">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner overflow-hidden">
                      <div class="carousel-item active ">
                        <img class="d-block w-100"  src="{{asset('assets/images/background/background-1.png')}}" alt="">
                      </div>
                      <div class="carousel-item ">
                        <img class="d-block w-100"  src="{{asset('assets/images/background/background-4.jpg')}}" alt="">
                      </div>
                      <div class="carousel-item ">
                        <img class="d-block w-100"  src="{{asset('assets/images/background/background-5.jpg')}}" alt="">
                      </div>
                      <div class="carousel-item ">
                        <img class="d-block w-100"  src="{{asset('assets/images/background/background-6.jpg')}}" alt="">
                      </div>
                    </div>
                  </div>
		    </div>
		    <div class="auth-background-mask"></div>
		    <div class="auth-background-overlay p-3 p-lg-5">
			    <div class="d-flex flex-column align-content-end h-100">
				    <div class="h-100"></div>
				    <div class="overlay-content p-3 p-lg-4 rounded">
					    <h5 class="mb-3 overlay-title">STE.OUARCHATE AL ASDIQAE.SARL</h5>
					     </div>
				</div>
		    </div><!--//auth-background-overlay-->
	    </div><!--//auth-background-col-->

    </div><!--//row-->
</div>


@endsection
