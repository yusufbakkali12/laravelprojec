@extends('layouts.app')

@section('content')



<div class="app app-reset-password p-0">
    <div class="row g-0 app-auth-wrapper">
	    <div class="col-12 col-md-7 col-lg-6 auth-main-col text-center p-5 mt-5">
		    <div class="d-flex flex-column align-content-end mt-5">
			    <div class="app-auth-body mx-auto">
				    <div class="app-auth-branding mb-4">
                        <a class="app-logo" href="{{url('/')}}">
                            <img class=" me-2" width="100px" height="100px" src="{{asset('assets/images/app-log.png')}}" alt="logo">
                        </a>
                    </div>
					<h2 class="auth-heading text-center mb-4">Password Reset</h2>
					<div class="auth-intro mb-4 text-center">Enter your email address below. We'll email you a link to a page where you can easily create a new password.</div>
					<div class="auth-form-container text-left">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
						<form method="POST" action="{{ route('password.email') }}" class="auth-form resetpass-form">
                            @csrf
							<div class="email mb-3">
								<label class="sr-only" for="email">Your Email</label>
                                <input id="email" type="email" class="form-control login-email @error('email') is-invalid @enderror" placeholder="Your Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div><!--//form-group-->
							<div class="text-center">
								<button type="submit" class="btn app-btn-primary btn-block theme-btn mx-auto">{{ __('Send Password Reset Link') }}</button>
							</div>
						</form>

						<div class="auth-option text-center pt-5"><a class="app-link" href="{{ route('login') }}">Log in</a> <span class="px-2">|</span> <a class="app-link" href="{{ route('register') }}">{{ __('Register') }} </a></div>
					</div><!--//auth-form-container-->
			    </div><!--//auth-body-->
		    </div><!--//flex-column-->
	    </div><!--//auth-main-col-->
	    <div class="col-12 col-md-5 col-lg-6 h-100 auth-background-col">
		    <div class="auth-background-holder">
		    </div>
		    <div class="auth-background-mask"></div>
		    <div class="auth-background-overlay p-3 p-lg-5">
			    <div class="d-flex flex-column align-content-end h-100">
				    <div class="h-100"></div>
				    <div class="overlay-content p-3 p-lg-4 rounded">
					    <h5 class="mb-3 overlay-title">Explore Portal Admin Template</h5>
					</div>
				</div>
		    </div><!--//auth-background-overlay-->
	    </div><!--//auth-background-col-->

    </div><!--//row-->


</div>


@endsection
