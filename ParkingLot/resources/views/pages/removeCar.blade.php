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
			<h3>Please enter your license plate number to pick up your car.</h3>
				{{ Form::open(array('url' => '/removeCarResult')) }}
					License Plate Number:
					{{ Form::text('licensePlate') }}
					<br></br>
					<a class="button btn btn-info" href="{{ URL::to('/') }}">Back</a>
					{{ Form::submit('Pick up', array('class' => 'btn btn-primary')) }}
				{{ Form::close() }}
		</div>
	</body>
</html>