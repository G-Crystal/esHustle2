@extends('layouts.login')

@section('head_css')

@stop

@section('content')

  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <form action="/login" method="post">
      <div class="form-group form-ctrl row">
        <label for="inputEmail" class="col-sm-4 control-label">Email</label>
        <div class="col-sm-8">
            <input type="email" class="form-control" placeholder="Email">
            <span class="glyphicon glyphicon-envelope form-control-feedback mr-15"></span>
        </div>
      </div>
      <div class="form-group form-ctrl row">
        <label for="inputPassword" class="col-sm-4 control-label">Password</label>
        <div class="col-sm-8">
            <input type="password" class="form-control" placeholder="Password">
            <span class="glyphicon glyphicon-lock form-control-feedback mr-15"></span>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label class="ml-20">
              <input type="checkbox"> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <a href="/forgot">I forgot my password</a><br>
    <a href="/register" class="text-center">Register a new membership</a>

  </div>
  <!-- /.login-box-body -->

@stop

@section('head_js')

@stop

@section('bodyend')

@stop
