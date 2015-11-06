@extends('app')

@section('content')
@if(Auth::check())
<hr>
<br>
<br>
<br>
<hr>
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			@if ($errors->any())
				<ul class="alert alert-danger">
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			@endif
			<div class="panel panel-default">
				<div class="panel-heading">Create a Post</div>

				<div class="panel-body">
					{!! Form::open(['url' => 'upload', 'enctype' => 'multipart/form-data']) !!}
            <div class="form-group">
    				  {!! Form::label('title', 'Title: ') !!}
    				  {!! Form::text('title', null, ['class' => 'form-control']) !!}
    			  </div>
					  <div class="from-group">
						  {!! Form::label('body', 'Select image to upload: ') !!}
						  {!! Form::input('file', 'fileToUpload', null, ['class' => 'btn btn-default btn-lg btn-block', 'id' => 'fileToUpload']) !!}<br>
							{!! Form::select('tags', [
							'video' => 'Video',
							'gif' => 'GIF',
							'cosplay' => 'Cosplay',
							'nsfw' => 'NSFW',
							'wtf' => 'WTF',
							'technical' => 'Technical',
							'other' => 'Other'
							], null, ['class' => 'form-control']) !!}
							<br>
							<!--<center><div class="g-recaptcha" data-sitekey="6Le8Yw8TAAAAALIYa_UEYSwrIrAwk5TlBXr9Ziyf"></div></center><br>-->
						  {!! Form::submit('Upload Image', ['class' => 'btn btn-default btn-lg btn-block', 'name' => 'submit', 'accept' => 'image/gif']) !!}
					  </div>
				  {!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
<footer class="footer">
	<div class="container">
		<p class="text-muted text-center">Max Image Size: 50MB</p>
	</div>
</footer>
@else
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Create a Post</div>

				<div class="panel-body">
					You need to be logged in to view this page.
				</div>
			</div>
		</div>
	</div>
</div>
<footer class="footer">
	<div class="container">
		<p class="text-muted text-center">Image size range: 5MB to 50MB</p>
	</div>
</footer>
@endif
@endsection
