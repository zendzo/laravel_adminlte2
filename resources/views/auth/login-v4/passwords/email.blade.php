@extends('auth.login-v4.layouts')

@section('form')
<form class="login100-form validate-form" method="POST" action="{{ route('password.email') }}">
  @csrf
  <span class="login100-form-title p-b-49">
    {{ ucfirst(Request::segment(1)) }}
  </span>
  @if (session('status'))
      <div class="alert alert-success" role="alert">
          {{ session('status') }}
      </div>
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
  
  <div class="container-login100-form-btn">
    <div class="wrap-login100-form-btn">
      <div class="login100-form-bgbtn"></div>
      <button class="login100-form-btn">
        {{ ucfirst(Request::segment(2)) }}
      </button>
    </div>
  </div>

  <div class="flex-col-c p-t-155">
    <span class="txt1 p-b-17">
      Or Sign Up Using
    </span>

    <a href="{{ route('register') }}" class="txt2">
      Sign Up
    </a>
  </div>
</form>
@endsection