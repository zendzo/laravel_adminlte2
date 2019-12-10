@extends('auth.admin-bsb.layouts')

@section('form')
<form id="sign_up" method="POST" method="POST" action="{{ route('register') }}">
	{{ csrf_field() }}
	<div class="msg">Register a new membership</div>
	<div class="input-group">
	    <span class="input-group-addon">
	        <i class="material-icons">person</i>
	    </span>
	    <div class="form-line {{ $errors->has('username') ? 'error':'' }}">
	        <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Enter username" required autofocus>
	    </div>
	    @if ($errors->has('username'))
	    <label id="username-error" class="error" for="username">
	    	{{ $errors->first('username') }}
	    </label>
	    @endif
	</div>
	<div class="input-group">
	    <span class="input-group-addon">
	        <i class="material-icons">email</i>
	    </span>
	    <div class="form-line {{ $errors->has('email') ? 'error':'' }}">
	        <input type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="Enter email" required autofocus>
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
	        <input type="password" class="form-control" name="password" placeholder="Enter password" required autofocus>
	    </div>
	    @if ($errors->has('password'))
	    <label id="password-error" class="error" for="password">
	    	{{ $errors->first('password') }}
	    </label>
	    @endif
	</div>
	<div class="input-group">
	    <span class="input-group-addon">
	        <i class="material-icons">lock</i>
	    </span>
	    <div class="form-line {{ $errors->has('password_confirmation') ? 'error':'' }}">
	        <input type="password" class="form-control" name="password_confirmation" placeholder="Enter Password Confirmation" required autofocus>
	    </div>
	    @if ($errors->has('password_confirmation'))
	    <label id="password_confirmation-error" class="error" for="password_confirmation">
	    	{{ $errors->first('password_confirmation') }}
	    </label>
	    @endif
	</div>
	<div class="form-group">
	    <input type="checkbox" name="terms" id="terms" class="filled-in chk-col-pink">
	    <label for="terms">I read and agree to the <a href="javascript:void(0);">terms of usage</a>.</label>
	</div>

	<button class="btn btn-block btn-lg bg-pink waves-effect" type="submit">SIGN UP</button>

	<div class="m-t-25 m-b--5 align-center">
	    <a href="{{ route('login') }}">You already have a membership?</a>
	</div>
</form>
@endsection