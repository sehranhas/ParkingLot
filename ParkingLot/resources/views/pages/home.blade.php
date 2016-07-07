<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<title>Home</title>
	</head>
	<body>
		<div class="container">
			<h3>Please choose an option below.</h3>
			<a class="button btn btn-success" href="{{ URL::to('add') }}">Park Car</a>
			<a class="button btn btn-danger" href="#">Pick Up Car</a>
		</div>
	</body>
</html>