@extends('layouts.app')

@section('content')
	<form action="/store" method="POST">
		@csrf
		<div class="form-group">
			<input class="form-control" name="name" placeholder="Title">
			<textarea class="form-control" placeholder="description" name="description"></textarea>
			<button type="submit" class="btn btn-success">Create task</button>
		</div>
	</form>
@endsection