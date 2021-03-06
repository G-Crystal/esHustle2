@extends('layouts.login')

@section('head_css')

@stop

@section('content')

  <!-- /.register -->
  <div class="register-box-body">
    <p class="login-box-msg">Register a new membership</p>

    {!! Form::open(array('url' => 'signup', 'method' => 'post', 'id' => 'subscription-form')) !!}
      <div class="form-group">
      </div>
    {!! Form::close() !!}
    <form action="/signup" method="post">
      {{ csrf_field() }}
      <div class="">
        <div class="form-group form-ctrl row">
          <label for="inputEmail" class="col-sm-4 control-label">First Name</label>
          <div class="col-sm-8">
              <input type="input" class="form-control pr-30" name="name" id="name" placeholder="First Name">
              <span class="glyphicon glyphicon-user form-control-feedback mr-15"></span>
          </div>
        </div>
        <div class="form-group form-ctrl row">
          <label for="inputEmail" class="col-sm-4 control-label">Last Name</label>
          <div class="col-sm-8">
              <input type="input" class="form-control pr-30" name="last_name" id="last_name" placeholder="Last Name">
              <span class="glyphicon glyphicon-user form-control-feedback mr-15"></span>
          </div>
        </div>
        <div class="form-group form-ctrl row">
          <label for="inputEmail" class="col-sm-4 control-label">Email</label>
          <div class="col-sm-8">
              <input type="email" class="form-control pr-30" name="email" id="email" placeholder="Email">
              <span class="glyphicon glyphicon-envelope form-control-feedback mr-15"></span>
          </div>
        </div>
        <div class="form-group form-ctrl row">
          <label for="inputPassword" class="col-sm-4 control-label">Password</label>
          <div class="col-sm-8">
              <input type="password" class="form-control pr-30" name="password" id="password" placeholder="Password">
              <span class="glyphicon glyphicon-lock form-control-feedback mr-15"></span>
          </div>
        </div>
        <div class="form-group form-ctrl row">
          <label for="inputConfirmPassword" class="col-sm-4 control-label">Confirm Password</label>
          <div class="col-sm-8">
              <input type="password" class="form-control pr-30" name="cfm_password" id="cfm_password" placeholder="Confirm Password">
              <span class="glyphicon glyphicon-log-in form-control-feedback mr-15"></span>
          </div>
        </div>
        <div class="form-group form-ctrl row">
          <label for="inputConfirmPassword" class="col-sm-4 control-label">Marketplace</label>
          <div class="col-sm-8">
              <select class="form-control" name="marketpace" id="marketpace">
              <?php
                if(count($markets) > 0) {
                  foreach($markets as $market) {
                    echo "<option value='" . $market->id . "'>" . $market->marketplace . "</option>";
                  }
                }
                else {
                  echo "<option value='-1'>No marketplace</option>";
                }
              ?>
              </select>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-6 pull-right">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Next ></button>
          </div>
        </div>
      </div>
    </form>

    <a href="/signin" class="text-center">I already have a membership</a>
  </div>
  <!-- /.form-box -->
  <!-- /.register-body -->

@stop

@section('head_js')

@stop

@section('bodyend')

@stop
