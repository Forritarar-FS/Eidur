@extends('app')
@section('content')
<html style="overflow-y: scroll; overflow-x: hidden;">
<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
<style>
  .content {
  text-align: center;
  display: inline-block;
  }
  .title {
  font-weight: 100;
  font-family: 'Lato';
  font-size: 36px;
  }
</style>



<div class="row">
  <h1 class="title col-md-offset-2" style="font-weight: bold;">Posts</h1>
  <div>
    <hr/>
    <div id="posts" class="row">
      <ul id="posts">
        <div class="col-md-3 col-md-offset-2">
          @foreach ($posts as $post)
          <div class="panel panel-default">
            <div class="panel-heading">
              <h2 class="panel-title title">
                <a style="font-weight: bold;" href="{{ action('PostsController@show', [$post->id]) }}">{{ $post->title }}</a>
              </h2>
            </div>
            <div class="panel-body"><img class="img-responsive" src="{{ $post->fileToUpload }}"></div>
            <div class="panel-footer">
                <p class="text-muted pull-right">Post created by: {{ $post->user->name }}</p>
                <div class="clearfix">
                </div>
            </div>
          </div>
          @endforeach
        </div>
        <div class="col-md-offset-3 col-md-5 col-md-offset-1">
    			<button type="button" class="btn btn-default btn-lg btn-block">Trending</button>
    			<button type="button" class="btn btn-default btn-lg btn-block">Video</button>
    			<button type="button" class="btn btn-default btn-lg btn-block">GIF</button>
    			<button type="button" class="btn btn-default btn-lg btn-block">Cosplay</button>
    			<button type="button" class="btn btn-default btn-lg btn-block list-group-item disabled">NSFW (18+)</button>
    			<button type="button" class="btn btn-default btn-lg btn-block">WTF</button>
    			<button type="button" class="btn btn-default btn-lg btn-block">Technical</button>
    		</div>
      </ul>
    </div>
  </div>
</div>
</html>
@stop
