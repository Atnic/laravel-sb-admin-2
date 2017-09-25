@extends('sb-admin-2::layouts.auth')

@section('content')
<div class="row">
  <div class="col-md-4 col-md-offset-4">
    <div class="login-panel panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Please Register</h3>
      </div>
      <div class="panel-body">
        <form action="{{ route('register') }}" method="POST">
          {{ csrf_field() }}
          <fieldset>
            <div class="form-group">
              <input class="form-control" placeholder="Full name" name="name" type="text" autofocus value="{{ old('name') }}">
              @if ($errors->has('name'))
              <span class="help-block">{{ $errors->first('name') }}</span>
              @endif
            </div>
            <div class="form-group">
              <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus value=" {{ old('email') }} ">
              @if ($errors->has('email'))
              <span class="help-block">{{ $errors->first('email') }}</span>
              @endif
            </div>
            <div class="form-group">
              <input class="form-control" placeholder="Password" name="password" type="password" value="">
              @if ($errors->has('password'))
              <span class="help-block">{{ $errors->first('password') }}</span>
              @endif
            </div>
            <div class="form-group">
              <input class="form-control" placeholder="Password Confirmation" name="password_confirmation" type="password" value="">
              @if ($errors->has('password_confirmation'))
              <span class="help-block">{{ $errors->first('password_confirmation') }}</span>
              @endif
            </div>
            <!-- Change this to a button or input when using this as a form -->
            <button type="submit" class="btn btn-lg btn-success btn-block">Register</button>
            <a href="{{ route('login') }}" class="btn btn-lg btn-primary btn-block">Login</a>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
