@extends('app')

@section('content')
@if(Auth::check())
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>

				<div class="panel-body">
					Hello and Welcome Mr. {{ Auth::user()->name }} <br>
					This page is currently under contruction, Please be patient ;)
				</div>
			</div>
		</div>
	</div>
</div>
@else
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
@endsection
