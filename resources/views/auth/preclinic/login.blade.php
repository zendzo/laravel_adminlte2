@extends('auth.preclinic.layouts')

@section('form')
<form id="sign_in" method="POST" method="POST" action="{{ route('login') }}" class="form-signin">
	{{ csrf_field() }}
    <div class="account-logo">
        <a href="/"><img src="{{ asset('Preclinic/img/logo-dark.png') }}" alt=""></a>
    </div>
    <div class="form-group">
        <label>Username or Email</label>
        <input type="text" autofocus="" class="form-control" name="email" required value="{{ old('email') }}">
        @if ($errors->has('email'))
	    <span style="color: #ff0000">
	        {{ $errors->first('email') }}
	    </span> 
	    @endif
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control" name="password" required>
        @if ($errors->has('password'))
	    <span style="color: #ff0000">
	        {{ $errors->first('password') }}
	    </span> 
	    @endif
    </div>
    <div class="form-group text-right">
        <a href="forgot-password.html">Forgot your password?</a>
    </div>
    <div class="form-group text-center">
        <button type="submit" class="btn btn-primary account-btn">Login</button>
    </div>
    <div class="text-center register-link">
        Don’t have an account? <a href="{{ route('register') }}">Register Now</a>
    </div>
</form>
@endsection