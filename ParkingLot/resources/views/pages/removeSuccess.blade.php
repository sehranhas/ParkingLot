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
			<h3>Come back again soon!</h3>
			Your total amount of pay is ${{ $total_pay }}. Your car was parked for {{ $diff_days }} days, {{ $diff_hours }} hours, 
			{{ $diff_mins }} minutes, and {{ $diff_seconds }} seconds. Thank you! 
			<br></br>
			<a class="button btn btn-info" href="{{ URL::to('/') }}">Return home</a>
		</div>
	</body>
</html>