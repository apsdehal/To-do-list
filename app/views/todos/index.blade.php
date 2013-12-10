<!DOCTYPE html>
<html>
<head>
	<title>Todos</title>
</head>
<body>

	<h1>Your task list</h1>
	
	<ul>
	
		@foreach($todos as $todo)
			
			<li> {{$todo->title}}</li>
		
		@endforeach

		{{HTML::link('todos/create','Create a new task')}}
	
	</ul>

</body>
</html>