<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<title>Park Car</title>
	</head>
	<body>
		<div class="container">
			<h3>Please fill in the information below to park your car.</h3>
				{{ Form::open(array('url' => '/addCarResult')) }}
					License Plate Number:
					{{ Form::text('licensePlate') }}
					<br></br>
					Car Size:
					{{ Form::select('size', array(1 => 'Small', 2 => 'Medium', 3 => 'Large', 4 => 'Super-Sized')) }}
					<br></br>
					<a class="button btn btn-info" href="{{ URL::to('/') }}">Back</a>
					{{ Form::submit('Park', array('class' => 'btn btn-primary')) }}
				{{ Form::close() }}
		</div>
	</body>
</html>