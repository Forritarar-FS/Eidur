@extends('app')
@section('content')
<div class="container">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h2 class="panel-title title">
        <a style="font-weight: bold;">{{ $post->title }}</a>
      </h2>
    </div>
    <div class="panel-body"><img class="img-responsive" style="margin-left: auto; margin-right: auto;" src="../{{ $post->fileToUpload }}"></div>
    <footer class="footer">
      <div class="container">
        <p class="text-muted">Post created by: {{ $post->user->name }}</p>
      </div>
    </footer>
  </div>
</div>
@stop
