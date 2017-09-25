@extends('sb-admin-2::layouts.auth')

@section('content')
<div class="row">
  <div class="col-md-4 col-md-offset-4">
    <div class="login-panel panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Reset Password</h3>
      </div>
      <div class="panel-body">
        <form action="{{ route('password.email') }}" method="POST">
          {{ csrf_field() }}
          <fieldset>
            <div class="form-group">
              <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
              @if ($errors->has('email'))
              <span class="help-block">{{ $errors->first('email') }}</span>
              @endif
            </div>
            <!-- Change this to a button or input when using this as a form -->
            <button type="submit" class="btn btn-lg btn-success btn-block">Send Reset Link</button>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
