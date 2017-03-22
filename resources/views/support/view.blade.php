@extends('layouts.master')

@push('head_css')

@endpush

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Support</h1>
      <ol class="breadcrumb">
        <li><a href=""><i class="fa fa-laptop"></i> Support</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>My Account</h3>

              <p>Personal Information</p>
            </div>
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
            <a href="/profile" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>Mobile App</h3>

              <p>App Information</p>
            </div>
            <div class="icon">
              <i class="fa fa-mobile"></i>
            </div>
            <a href="/mobile" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>Option AA</h3>

              <p>Device Option</p>
            </div>
            <div class="icon">
              <i class="fa fa-edit"></i>
            </div>
            <a href="/option" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>Support</h3>

              <p>Customer Support</p>
            </div>
            <div class="icon">
              <i class="fa fa-life-ring"></i>
            </div>
            <a href="/support" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
@stop

@push('head_js')

@endpush
