@extends('auth.preclinic.layouts')

@section('form')
<form id="sign_up" method="POST" method="POST" action="{{ route('register') }}" class="form-signin">
	{{ csrf_field() }}
	<div class="account-logo">
        <a href="/"><img src="{{ asset('Preclinic/img/logo-dark.png') }}" alt=""></a>
    </div>
    <div class="form-group">
        <label>Username</label>
        <input type="text" name="username" class="form-control" required value="{{ old('username') }}">
        @if ($errors->has('username'))
	    <span style="color: #ff0000">
	        {{ $errors->first('username') }}
	    </span> 
	    @endif
    </div>
    <div class="form-group">
        <label>Email Address</label>
        <input type="email" name="email" class="form-control" required value="{{ old('email') }}">
        @if ($errors->has('email'))
	    <span style="color: #ff0000">
	        {{ $errors->first('email') }}
	    </span> 
	    @endif
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" class="form-control" required>
        @if ($errors->has('password'))
	    <span style="color: #ff0000">
	        {{ $errors->first('password') }}
	    </span> 
	    @endif
    </div>
    <div class="form-group">
        <label>Password Confirmation</label>
        <input type="password" name="password_confirmation" class="form-control" required>
        @if ($errors->has('password_confirmation'))
	    <span style="color: #ff0000">
	        {{ $errors->first('password_confirmation') }}
	    </span> 
	    @endif
    </div>
    <div class="form-group checkbox">
        <label>
            <input type="checkbox"> I have read and agree the Terms & Conditions
        </label>
    </div>
    <div class="form-group text-center">
        <button class="btn btn-primary account-btn" type="submit">Signup</button>
    </div>
    <div class="text-center login-link">
        Already have an account? <a href="{{ route('login') }}">Login</a>
    </div>
</form>
@endsection