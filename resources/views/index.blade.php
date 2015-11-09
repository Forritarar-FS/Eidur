@extends('app')
@section('content')
<html style="overflow-y: scroll; overflow-x: hidden;">
<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
<style>
  #gradient {
      position:absolute;
      z-index:2;
      right:0; bottom:0; left:0;
      height:200px; /* adjust it to your needs */
      background: url(data:image/svg+xml;base64,alotofcodehere);
      background: -moz-linear-gradient(top,  rgba(255,255,255,0) 0%, rgba(255,255,255,1) 70%);
      background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(255,255,255,0)), color-stop(70%,rgba(255,255,255,1)));
      background: -webkit-linear-gradient(top,  rgba(255,255,255,0) 0%,rgba(255,255,255,1) 70%);
      background: -o-linear-gradient(top,  rgba(255,255,255,0) 0%,rgba(255,255,255,1) 70%);
      background: -ms-linear-gradient(top,  rgba(255,255,255,0) 0%,rgba(255,255,255,1) 70%);
      background: linear-gradient(to bottom,  rgba(255,255,255,0) 0%,rgba(255,255,255,1) 70%);
  }

  .custom {
    color:#7f8c8d;
    opacity:0.7;
  }

  .custom:active {
    color:green;
  }

  #img {
    display: inline;
    width: 180px;
    height: 180px;
    max-height: 180px;
    min-height: 180px;


  }
</style>

<h1 class="container" style="font-weight: bold; color: white; margin-top: 65px;">Posts</h1>
<hr/>
    <div class="container jumbotron">
      @foreach ($posts as $post)
        <a href="{{ action('PostsController@show', [$post->id]) }}">
          <span class="col-md-2 col-sm-3 col-xs-6" style="margin-left: -15px; margin-right: 15px; overflow: hidden; margin-bottom: 15px;">
              <img src="{{ $post->fileToUpload }}" id="img">
          </span>
      </a>
      @endforeach
    </div>
    <center>{!! $posts->render(); !!}</center>
</html>
@stop
