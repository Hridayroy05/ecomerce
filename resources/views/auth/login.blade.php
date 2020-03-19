@extends('layouts.app')

@section('content')
 
    <!-- login area start -->
    <div class="login-area">
        <div class="container">
            <div class="login-box ptb--100">
                <form method="POST" action="{{ route('login') }}">
                @csrf
                    <div class="login-form-head">
                        
                        <h4>{{ __('Sign In') }}</h4>
                        <p>Hello there, Sign in and start managing your Admin Template</p>
                    </div>
                    <div class="login-form-body">
                        <div class="form-gp">
                            <label for="email">{{ __('') }}</label>
                            <input placeholder=" E-Mail Address"  type="email" id="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            <i class="ti-email"></i>
                            @error('email')
                            <div class="text-danger invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </div>
                            @enderror
                        </div>
                        <div class="form-gp">
                            <!-- <label for="exampleInputPassword1">Password</label> -->
                            <input placeholder=" Password" type="password" id="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            <i class="ti-lock"></i>

                            @error('password')
                            <div class="invalid-feedback text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                            </div>
                            @enderror
                        </div>


                        <div class="row mb-4 rmber-area">
                            <div class="col-6">
                                <div class="custom-control custom-checkbox mr-sm-2">
                                    <input type="checkbox" class="custom-control-input" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="custom-control-label" for="remember">{{ __('Remember Me') }}</label>
                                </div>
                            </div>
                            <div class="col-6 text-right">
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" >{{ __('Forgot Password?') }}</a>
                                @endif
                            </div>
                        </div>
                        <div class="submit-btn-area">
                            <button id="form_submit" type="submit">{{ __('Submit') }} <i class="ti-arrow-right"></i></button>
                            <div class="login-other row mt-4">
                                <div class="col-6">
                                    <a class="fb-login" href="#">Log in with <i class="fa fa-facebook"></i></a>
                                </div>
                                <div class="col-6">
                                    <a class="google-login" href="#">Log in with <i class="fa fa-google"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="form-footer text-center mt-5">
                            <p class="text-muted">Don't have an account? <a href="register.html">Sign up</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
