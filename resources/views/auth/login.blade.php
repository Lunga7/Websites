@extends('layouts.login_reg')

@section('content')
<form method="POST" class="login100-form validate-form" action="{{ route('login') }}">
@csrf    
<span class="login100-form-title p-b-55">
        Login
    </span>

    <div class="wrap-input100 validate-input m-b-16" data-validate = "Valid email is required: ex@abc.xyz">
        <input id="email" class="form-control @error('email') is-invalid @enderror" type="email" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email" autofocus>
        
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
        <input id="password" class="form-control @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password" required autocomplete="current-password">
        
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="contact100-form-checkbox m-l-4">
        <input class="input-checkbox100" id="remember" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
        <label class="label-checkbox100" for="remember">
            Remember me
        </label>
    </div>
    
    <div class="container-login100-form-btn p-t-25">
        <button type="submit" class="login100-form-btn">
            {{ __('Login') }}
        </button>
    </div>

    @if(Route::has('password.request'))
        <a class="btn btn-link" href="{{ route('password.request') }}">
            {{ __('Forgot Password?') }}
        </a>
    @endif
    

    <div class="text-center w-full p-t-115">
        <span class="txt1">
            Not a member?
        </span>

        <a class="txt1 bo1 hov1" href="{{ route('register') }}">
            Sign up now							
        </a>
    </div>
</form>
@endsection