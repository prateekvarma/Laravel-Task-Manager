<!DOCTYPE html>
<html>
<head>
	<title>Todos</title>
</head>
<body>
	<h1>Todos List</h1>
	@foreach($todos as $todo)
		<li>{{ $todo->name }}</li>
		<li>{{ $todo->description }}</li>
		<li>{{ $todo->completed }}</li>
	@endforeach
</body>
</html>