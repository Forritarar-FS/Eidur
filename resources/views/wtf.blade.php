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
</style>



<div class="row">
  <h1 class="title col-sm-offset-1" style="font-weight: bold;">WTF Posts</h1>
  <div>
    <hr/>
    <div id="posts" class="row">
      <ul id="posts">
        <div class="col-sm-11 col-lg-5 col-md-offset-1">
          @foreach ($posts as $post)
          <div id="content" class="panel panel-default">
            <div class="panel-heading">
              <h2 class="panel-title title">
                <a style="font-weight: bold;" href="{{ action('PostsController@show', [$post->id]) }}">{{ $post->title }}</a>
              </h2>
            </div>
            <div style="hidden; overflow: hidden;" class="panel-body"><a style="font-weight: bold;" href="{{ action('PostsController@show', [$post->id]) }}"><img class="img-responsive" style="width: 100%" src="{{ $post->fileToUpload }}"></a></div>
            <div class="panel-footer">
              <a><span style="font-size: 35px;" class="pull-left glyphicon glyphicon-ok custom" aria-hidden="true"></span></a>
              <div class="fb-share-button" data-href="{{ action('PostsController@show', [$post->id]) }}" data-layout="button_count"></div>
                <p class="text-muted pull-right">Post created by: {{ $post->user->name }}</p>
                <div class="clearfix">
                </div>
            </div>
          </div>
          <hr>
          @endforeach
        </div>
        <div class="hidden-xs hidden-sm col-sm-offset-4 col-sm-4 col-sm-offset-1">
          <a href="{{ url('/') }}" ><button type="button" class="btn btn-default btn-lg btn-block">Trending</button></a>
    			<a href="{{ url('/video') }}" ><button type="button" class="btn btn-default btn-lg btn-block">Video</button></a>
    			<a href="{{ url('/gif') }}" ><button type="button" class="btn btn-default btn-lg btn-block">GIFs</button></a>
    		  <a href="{{ url('/cosplay') }}"><button type="button" class="btn btn-default btn-lg btn-block">Cosplay</button></a>
    			<a href="{{ url('/nsfw') }}" style="pointer-events: none;"><button type="button" class="btn btn-default btn-lg btn-block list-group-item disabled">NSFW (18+)</button></a>
    			<a href="{{ url('/wtf') }}" ><button type="button" class="btn btn-default btn-lg btn-block">WTF</button></a>
    			<a href="{{ url('/technical') }}" ><button type="button" class="btn btn-default btn-lg btn-block">Technical</button></a>
    		</div>
      </ul>
    </div>
  </div>
</div>
<center>{!! $posts->render(); !!}</center>
</html>
@stop
