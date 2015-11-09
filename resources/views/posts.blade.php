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
        <a style="font-weight: bold;">{{ $post->title }}</a>
      </h2>
    </div>

    <div class="panel-body"><img class="img-responsive" style="margin-left: auto; margin-right: auto;" src="../{{ $post->fileToUpload }}"></div>
    <div class="panel-footer">
      <a href="{{ action('PostsController@like', [$post->id]) }}"><span style="font-size: 35px;" class="pull-left glyphicon glyphicon-ok" aria-hidden="true"></span></a>
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
    {!! Form::open() !!}
      <div class="from-group">
        {!! Form::label('comment', 'Write your comment: ') !!}
        {!! Form::textarea('comment', null, ['class' => 'form-control', 'rows' => '4', 'id' => 'editor1']) !!}<br>
        <!--<center><div class="g-recaptcha" data-sitekey="6Le8Yw8TAAAAALIYa_UEYSwrIrAwk5TlBXr9Ziyf"></div></center><br>-->
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
