@extends('app')
@section('content')
<html style="overflow-y: scroll; overflow-x: hidden;">
      <div class="row">
        <div style="position: absolute; background-color: #011; padding-top: 65px; padding-right: 0px; padding-bottom: 100%;" class=" col-xs-hidden col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><b style="padding-left: 10px; font-size: 18px;">Overview</b></li>
            <li><a href="{{ url('/profile') }}">View My Profile</a></li>
            <li><a href="#">My Posts</a></li>
            <li><a href="#">My Comments</a></li>
          </ul>
        <hr>
          <ul class="nav nav-sidebar">
            <li><b style="padding-left: 10px; font-size: 18px;">Edit My Profile</b></li>
            <li><a href="#">Edit Quote</a></li>
            <li><a href="{{ url('/profile/password') }}">Reset Password</a></li>
            <li><a href="#">Change Country</a></li>
            <li><a href="#">Change Name</a></li>
          </ul>
        </div>
          <hr>
          <div style="margin-top: 50px;" class="container col-sm-8 col-sm-offset-3 col-md-9 col-md-offset-2 col-xs-8 col-xs-offset-3">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2 class="panel-title title">
                  <h4 style="position: relatives; margin-top: 0em;" class="text-muted pull-right">Test</h4>
                  <a style="font-weight: bold;">Test</a>
                </h2>
              </div>

              <div class="panel-body">
                <h4>This panel is currently under construction.</h4>
                <p>To Reset/Change your password. You must do a nasty workaround to be able to do this, As we are sill in BETA. To reset your password please log out then go to the login page and click on "Forgot my Password"</p>
                <p>You will receive an email from us shortly after with your password reset link. Able to reset it to whatever your liking, Click on it and you can change your password right away!</p>
              </div>
            </div>
          </div>

@stop
