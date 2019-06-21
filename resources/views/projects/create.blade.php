<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


	<h1>Create New Project</h1>

	<form method="POST" action="/projects">

		<!-- {{ csrf_field() }} -->
		@csrf

		<div>
			
			<input type="text" name="title" placeholder="Project Title">

		</div>

		<div>
			
			<textarea name="description" placeholder="Project Descripiton"></textarea>

		</div>

		<div>
			 
			<button type="submit"> Create Project </button>

		</div>

	</form>
	

</body>
</html>