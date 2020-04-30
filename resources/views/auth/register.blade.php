@extends('layouts.login_reg')

@section('content')
<form method="POST" class="login100-form validate-form" action="{{ route('register') }}">
    @csrf    
    <span class="login100-form-title p-b-55">
            Register
        </span>
        
        <div class="wrap-input100 validate-input m-b-16" data-validate = "Valid email is required: ex@abc.xyz">
            <input id="name" class="form-control @error('name') is-invalid @enderror" type="text" name="name" value="{{ old('name') }}" placeholder="Full Name" required autocomplete="name" autofocus>
            
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

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
        
        <div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
            <input id="password-confirm" class="form-control" type="password" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
            
        </div>

        
        <div class="container-login100-form-btn p-t-25">
            <button type="submit" class="login100-form-btn">
                {{ __('Register') }}
            </button>
        </div>

                
</form>
@endsection
	