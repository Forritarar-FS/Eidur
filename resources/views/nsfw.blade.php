@extends('app')
@section('content')
@if (!Auth::guest())
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

<h1 class="container" style="font-weight: bold; color: white; margin-top: 65px;">Posts</h1>
<hr/>
    <div class="container jumbotron">
      @foreach ($posts as $post)
        <a href="{{ action('PostsController@show', [$post->id]) }}">
          <span class="col-md-2 col-sm-3 col-xs-6" style="margin-left: -15px; margin-right: 15px; overflow: hidden; margin-bottom: 15px;">
              <img src="uploads/images/posts/{{ $post->fileToUpload }}" id="img">
          </span>
      </a>
      @endforeach
    </div>
    <center>{!! $posts->render(); !!}</center>
</html>
@endif
@if (Auth::guest())
<div style="margin-top: 100px;"></div>
<hr>
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>

				<div class="panel-body">
					You need to be logged in to view this page.
				</div>
			</div>
		</div>
	</div>
</div>
@endif
@stop
