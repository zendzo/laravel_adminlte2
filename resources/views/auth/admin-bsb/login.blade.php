@extends('auth.admin-bsb.layouts')

@section('form')
<form id="sign_in" method="POST" method="POST" action="{{ route('login') }}">
	{{ csrf_field() }}
	<div class="msg">Sign in to start your session</div>
	<div class="input-group">
	    <span class="input-group-addon">
	        <i class="material-icons">person</i>
	    </span>
	    <div class="form-line {{ $errors->has('email') ? 'error':'' }}">
	        <input type="text" class="form-control" type="text" name="email" value="{{ old('email') }}" placeholder="Enter email" required autofocus>
	    </div>
	    @if ($errors->has('email'))
	    <label id="email-error" class="error" for="email">
	    	{{ $errors->first('email') }}
	    </label>
        @endif
	</div>
	<div class="input-group">
	    <span class="input-group-addon">
	        <i class="material-icons">lock</i>
	    </span>
	    <div class="form-line {{ $errors->has('password') ? 'error':'' }}">
	        <input type="password" class="form-control" name="password" placeholder="Password" required>
	    </div>
	    @if ($errors->has('password'))
	    <label id="password-error" class="error" for="password">
	    	{{ $errors->first('password') }}
	    </label>
        @endif
	</div>
	<div class="row">
	    <div class="col-xs-8 p-t-5">
	        <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">
	        <label for="rememberme">Remember Me</label>
	    </div>
	    <div class="col-xs-4">
	        <button class="btn btn-block bg-pink waves-effect" type="submit">SIGN IN</button>
	    </div>
	</div>
	<div class="row m-t-15 m-b--20">
	    <div class="col-xs-6">
	        <a href="{{ route('register') }}">Register Now!</a>
	    </div>
	    <div class="col-xs-6 align-right">
	        <a href="{{ route('password.request') }}">Forgot Password?</a>
	    </div>
	</div>
</form>
@endsection