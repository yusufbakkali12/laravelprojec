@extends('layouts.app')

@section('content')
<div class="app app-login p-0">
    <div class="row g-0 app-auth-wrapper">
	    <div class="col-12 col-md-7 col-lg-6 auth-main-col text-center p-5 mt-5">
		    <div class="d-flex flex-column align-content-end">
			    <div class="app-auth-body mx-auto">
				    <div class="app-auth-branding mb-4">
                        <a class="app-logo" href="{{ url('/') }}">
                            <img class=" me-2" width="100px" height="100px" src="{{asset('assets/images/app-log.png')}}" alt="logo">
                        </a>
                    </div>
					<h2 class="auth-heading text-center mb-5 text-danger fw-bolder ">
                        {{ __('STE.OUARCHATE ') }}<span class="text-info"> AL ASDIQAE.SARL</span>
                    </h2>
			        <div class="auth-form-container text-start">
						<form class="auth-form login-form" method="POST" action="{{ route('login') }}" >
                            @csrf
							<div class="email mb-3">
								<label class="sr-only" for="email">Email</label>
                                <input id="email" type="email" class="form-control signin-email @error('email') is-invalid @enderror" placeholder="Email address" name="email" value="{{ old('email') }}"  autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>
                            <!--//form-group-->
                                <div class="password mb-3">
                                    <label class="sr-only" for="password">Password</label>
                                    <div class="signin-password input-group app-search-box  search-input border rounded form-control p-0 m-0 d-flex ">
                                        <input id="password"  name="password" type="password" class="
                                        form-control
                                        @error('password') is-invalid @enderror" placeholder="Password"   autocomplete="current-password">
                                        <button type="button"
                                         onclick="toggle()"
                                         class="btn search-input" id="showPss">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-eye-slash" viewBox="0 0 16 16">
                                                    <path d="M13.359 11.238C15.06 9.72 16 8 16 8s-3-5.5-8-5.5a7.028 7.028 0 0 0-2.79.588l.77.771A5.944 5.944 0 0 1 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.134 13.134 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755-.165.165-.337.328-.517.486l.708.709z"/>
                                                    <path d="M11.297 9.176a3.5 3.5 0 0 0-4.474-4.474l.823.823a2.5 2.5 0 0 1 2.829 2.829l.822.822zm-2.943 1.299.822.822a3.5 3.5 0 0 1-4.474-4.474l.823.823a2.5 2.5 0 0 0 2.829 2.829z"/>
                                                    <path d="M3.35 5.47c-.18.16-.353.322-.518.487A13.134 13.134 0 0 0 1.172 8l.195.288c.335.48.83 1.12 1.465 1.755C4.121 11.332 5.881 12.5 8 12.5c.716 0 1.39-.133 2.02-.36l.77.772A7.029 7.029 0 0 1 8 13.5C3 13.5 0 8 0 8s.939-1.721 2.641-3.238l.708.709zm10.296 8.884-12-12 .708-.708 12 12-.708.708z"/>
                                                  </svg>
                                        </button>
                                    </div>
                                    <script>
                                       function toggle(){
                                          const x= document.getElementById('password')
                                          const y= document.getElementById('showPss')
                                           if (x.type === "password") {
                                                    x.type = "text";
                                                    y.innerHTML=`<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                                                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                                                </svg>`
                                            }else{
                                                    x.type = "password";
                                                    y.innerHTML=`<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-eye-slash" viewBox="0 0 16 16">
                                                                    <path d="M13.359 11.238C15.06 9.72 16 8 16 8s-3-5.5-8-5.5a7.028 7.028 0 0 0-2.79.588l.77.771A5.944 5.944 0 0 1 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.134 13.134 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755-.165.165-.337.328-.517.486l.708.709z"/>
                                                                    <path d="M11.297 9.176a3.5 3.5 0 0 0-4.474-4.474l.823.823a2.5 2.5 0 0 1 2.829 2.829l.822.822zm-2.943 1.299.822.822a3.5 3.5 0 0 1-4.474-4.474l.823.823a2.5 2.5 0 0 0 2.829 2.829z"/>
                                                                    <path d="M3.35 5.47c-.18.16-.353.322-.518.487A13.134 13.134 0 0 0 1.172 8l.195.288c.335.48.83 1.12 1.465 1.755C4.121 11.332 5.881 12.5 8 12.5c.716 0 1.39-.133 2.02-.36l.77.772A7.029 7.029 0 0 1 8 13.5C3 13.5 0 8 0 8s.939-1.721 2.641-3.238l.708.709zm10.296 8.884-12-12 .708-.708 12 12-.708.708z"/>
                                                                </svg>`
                                                }
                                       }
                                    </script>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <div class="extra mt-3 row justify-content-between">
                                        <div class="col-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                <label class="form-check-label" for="remember">
                                                    {{ __('Remember Me') }}
                                                </label>
                                            </div>
                                        </div>
                                        <!--//col-6-->
                                        <div class="col-6">
                                            <div class="forgot-password text-end">
                                                @if (Route::has('password.request'))
                                                <a  href="{{ route('password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                                @endif
                                            </div>
                                        </div>
                                        <!--//col-6-->
                                    </div><!--//extra-->
                                </div>
                            <!--//form-group-->
							<div class="text-center">
                                <button type="submit" class="btn  btn-danger text-white w-100 theme-btn mx-auto">
                                    {{ __('Log In') }}
                                </button>
							</div>
						</form>
						<div class="auth-option text-center pt-5">No Account? Sign up <a class="text-link" href="{{ route('register') }}">here</a>.</div>
					</div><!--//auth-form-container-->
			    </div><!--//auth-body-->
		    </div><!--//flex-column-->
	    </div><!--//auth-main-col-->
	    <div class="col-12 col-md-5 col-lg-6 h-100 auth-background-col overflow-hidden">
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
		    <div class="auth-background-overlay p-3 p-lg-5 overflow-hidden">
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
