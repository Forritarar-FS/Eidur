@extends('app')
@section('content')
<html style="overflow-y: scroll; overflow-x: hidden;">
<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
<style>
  #img {
    display: inline;
    width: 180px;
    height: 180px;
    max-height: 180px;
    min-height: 180px;
  }
</style>
<script>
  document.getElementById('spinner').style.display = '';  // show it, and then...
  document.getElementById('spinner').innerHTML = document.getElementById('spinner').innerHTML;
</script>

<h1 class="container" style="font-weight: bold; color: white; margin-top: 65px;">Posts</h1>
<hr/>
    <div class="container jumbotron">
      @foreach ($posts as $post)
        <a href="{{ action('PostsController@show', [$post->id]) }}">
          <span class="col-md-2 col-sm-3 col-xs-6" style="margin-left: -15px; margin-right: 15px; overflow: hidden; margin-bottom: 15px;">
              <div id="spinner"><img src="{{ $post->fileToUpload }}" id="img"></div>
          </span>
      </a>
      @endforeach
    </div>
    <center>{!! $posts->render(); !!}</center>
</html>
@stop
