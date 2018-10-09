@extends('auth.login-v4.layouts')

@section('form')
<form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
  @csrf
  <span class="login100-form-title p-b-49">
    {{ ucfirst(Request::segment(1)) }}
  </span>

  <div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
    <span class="label-input100">Username</span>
    <input class="input100" type="text" name="username" placeholder="Type your username" value="{{ old('username') }}">
    <span class="focus-input100" data-symbol="&#xf206;"></span>
  </div>
  @if ($errors->has('username'))
    <span class="input-error" role="alert" style="color: #c80000;">
        {{ $errors->first('username') }}
    </span> 
  @endif

  <div class="wrap-input100 validate-input m-b-23" data-validate = "Email is reauired">
    <span class="label-input100">Email</span>
    <input class="input100" type="text" name="email" placeholder="Type your email" value="{{ old('email') }}">
    <span class="focus-input100" data-symbol="&#x2709;"></span>
  </div>
  @if ($errors->has('email'))
    <span class="input-error" role="alert" style="color: #c80000;">
        {{ $errors->first('email') }}
    </span> 
  @endif

  <div class="wrap-input100 validate-input" data-validate="Password is required">
    <span class="label-input100">Password</span>
    <input class="input100" type="password" name="password" placeholder="Type your password">
    <span class="focus-input100" data-symbol="&#xf190;"></span>
  </div>
  @if ($errors->has('password'))
    <span class="input-error" role="alert" style="color: #c80000;">
        {{ $errors->first('password') }}
    </span> 
  @endif

  <div class="wrap-input100 validate-input" data-validate="Password is required">
    <span class="label-input100">Password</span>
    <input class="input100" type="password" name="password_confirmation" placeholder="Password Confirmation">
    <span class="focus-input100" data-symbol="&#xf190;"></span>
  </div>
  
  <div class="text-right p-t-8 p-b-31">
   <a href="{{ route('password.request') }}">
      Forgot password?
    </a>
  </div>
  
  <div class="container-login100-form-btn">
    <div class="wrap-login100-form-btn">
      <div class="login100-form-bgbtn"></div>
      <button class="login100-form-btn">
        {{ ucfirst(Request::segment(1)) }}
      </button>
    </div>
  </div>

  <div class="flex-col-c p-t-155">
    <span class="txt1 p-b-17">
      Already have an Account?
    </span>

    <a href="{{ route('login') }}" class="txt2">
      Log In
    </a>
  </div>
</form>
@endsection