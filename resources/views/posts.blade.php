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
  <div class="panel panel-default">
    <div class="panel-heading">
      <h2 class="panel-title title"></h2>
        @foreach ($comments as $comment)
          <div class="media">
            <div class="media-left">
              <a href="#">
                {!! Html::image('pictures/avatar.png', 'Placeholder Avatar', ['class' => 'media-object']) !!}
              </a>
            </div>
            <div class="media-body">
              <h4 class="meda-heading">{{ $comment->user->name }}</h4>
              <p>{{ $comment->comment }}</p>
            </div>
          </div>
          <hr>
        @endforeach
    </div>
  </div>
  <div class="panel-footer">
    {!! Form::open() !!}
      <div class="from-group">
        {!! Form::label('comment', 'Write your comment: ') !!}
        {!! Form::textarea('comment', null, ['class' => 'form-control']) !!}<br>
        <!--<center><div class="g-recaptcha" data-sitekey="6Le8Yw8TAAAAALIYa_UEYSwrIrAwk5TlBXr9Ziyf"></div></center><br>-->
        {!! Form::submit('Post Comment', ['class' => 'btn btn-default btn-lg btn-block', 'name' => 'submit']) !!}
      </div>
    {!! Form::close() !!}
  </div>
</div>
</div>
@stop
