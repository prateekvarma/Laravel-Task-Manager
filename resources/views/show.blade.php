@extends('layouts.app')

@section('content')

	<h1>Task name : {{ $todo_found->name }}</h1>
	<p>Task Description: {{ $todo_found->description }}</p>
	<h4>Status : {{ $todo_found->completed }}</h4>

@endsection