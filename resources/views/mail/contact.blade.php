<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contact Mail</title>
</head>
<body>
	<h1>You've got mail from {{ $email }}</h1>
	<ul>
		<li>Name from : {{ $name }}</li>
		<li>Website is at : {{ $website }}</li>
		<li>Content of form : {{ $description }}</li>
	</ul>
</body>
</html>