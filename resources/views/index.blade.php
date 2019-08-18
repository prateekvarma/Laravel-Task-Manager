@extends('layouts.app')

@section('content')

	<h1>Todos List</h1>
	@foreach($todos as $todo)
		<li>{{ $todo->name }} - <a href="/todos/{{ $todo->id }}">View</a></li>
	@endforeach

@endsection