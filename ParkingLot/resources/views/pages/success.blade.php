<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<title>Success</title>
	</head>
	<body>
		<div class="container">
			<h3>Thank you</h3>
			Please park your car at parking spot number, {{ $spot }}. 
			<br></br>
			<a class="button btn btn-info" href="{{ URL::to('/') }}">Return home</a>
		</div>
	</body>
</html>