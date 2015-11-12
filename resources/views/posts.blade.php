@extends('app')
@section('content')
<style>
  body {
    background-color: #1F1C18;
  }
</style>
<hr>
<div style="margin-top: 50px;" class="container">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h2 class="panel-title title">
        <h4 style="position: relatives; margin-top: 0em;" class="text-muted pull-right">{{ $postPoints }} Points</h4>
        <a style="font-weight: bold;">{{ $post->title }}</a>
      </h2>
    </div>

    <div class="panel-body" style="text-align: center;">
      <img class="img-responsive" data-gifffer="../{{ $post->fileToUpload }}" style="margin-left: auto; margin-right: auto;">
    </div>
    <div class="panel-footer">
      @if (Auth::check())
      <a href="{{ url('/posts/like', $post->id) }}"><span style="font-size: 35px; color: green;" class="pull-left glyphicon glyphicon-ok" aria-hidden="true"></span></a>
      <a href="{{ url('/posts/dislike', $post->id) }}"><span style="font-size: 35px; margin-left: 15px; color: red;" class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
      @else
      <a href="{{ url('#') }}"><span style="font-size: 35px; color: green;" class="pull-left glyphicon glyphicon-ok" aria-hidden="true"></span></a>
      <a href="{{ url('#') }}"><span style="font-size: 35px; margin-left: 15px; color: red;" class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
      @endif
        <p class="text-muted pull-right">Post created by: {{ $post->user->name }}</p>
        <div class="clearfix">
        </div>
    </div>
  </div>
  <hr>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h2 class="panel-title title"></h2>
          <a data-toggle="collapse" href="#collapse1"><button type="button" class="btn btn-default btn-block">Show/Hide Comments</button></a>
      <div id="collapse1" class="panel-collapse collapse">

        @foreach ($comments as $comment)
          <div class="media">
            <div class="media-left">
              <a href="#">
                {!! Html::image('pictures/avatar.png', 'Placeholder Avatar', ['class' => 'media-object']) !!}
              </a>
            </div>
            <div class="media-body">
              <h4 class="meda-heading">{{ $comment->user->name }}</h4>
              <p>{!! $comment->comment !!}</p>
              {!! Html::image($comment->fileToUpload, null, ['style' => 'max-height: 180px;']) !!}
              <!--<img style="max-height: 180px; min-height: 50px;" src="../uploads/images/comments/{{ $comment->fileToUpload }}" onclick="lightbox_open();">
              <div id="light"><img src="uploads/images/comments/{{ $comment->fileToUpload }}"></div>
              <div id="fade" onClick="lightbox_close();"></div>-->
            </div>
          </div>
          <hr>
        @endforeach
    </div>
  </div>
  <hr>
  @if(Auth::check())
  @if ($errors->any())
    <ul class="alert alert-danger">
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  @endif
  <div class="panel-footer">
    {!! Form::open(['enctype' => 'multipart/form-data']) !!}
      <div class="from-group">
        {!! Form::label('comment', 'Write your comment: ') !!}
        {!! Form::textarea('comment', null, ['class' => 'form-control', 'rows' => '4', 'id' => 'editor1']) !!}<br>
        <!--<center><div class="g-recaptcha" data-sitekey="6Le8Yw8TAAAAALIYa_UEYSwrIrAwk5TlBXr9Ziyf"></div></center><br>-->
        {!! Form::input('file', 'fileToUpload', null, ['style' => 'overflow: hidden;', 'class' => 'btn btn-default btn-lg btn-block']) !!}
        {!! Form::submit('Post Comment', ['class' => 'btn btn-default btn-lg btn-block', 'name' => 'submit']) !!}
      </div>
    {!! Form::close() !!}
  </div>
  <script>
    CKEDITOR.replace( 'editor1' );
  </script>
  @else
  @if ($errors->any())
    <ul class="alert alert-danger">
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  @endif
  <div class="panel-footer">

      <div class="from-group">
        {!! Form::label('comment', 'Write your comment: ') !!}
        {!! Form::textarea('comment', null, ['class' => 'form-control disabled', 'placeholder' => 'You need to be logged in to write a comment', 'rows' => '4']) !!}<br>
        <!--<center><div class="g-recaptcha" data-sitekey="6Le8Yw8TAAAAALIYa_UEYSwrIrAwk5TlBXr9Ziyf"></div></center><br>-->
        {!! Form::submit('You need to be logged in to post a comment', ['class' => 'btn btn-default btn-lg btn-block disabled', 'name' => 'submit']) !!}
      </div>

  </div>
  @endif
  <hr>
</div>
</div>
@stop
