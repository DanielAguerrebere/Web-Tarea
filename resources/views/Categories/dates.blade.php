<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<meta charset="utf-8"></meta>
	<title>Laravel dates</title>

</head>
<body>
	<div class="container my-5">
		<form action="{{route('cars_res')}}" method="post">
			{{csrf_field()}}
			<div class="form-group">
				<label for="origin">From:</label>
				<select class="form-control" name="origin" required>
					@foreach($locations as $l)
						<option value="{{$l->ID}}">{{$l->ADDRESS}}, {{$l->CITY}}, {{$l->STATE}}.</option>	
					@endforeach
		    	</select>
			</div>
			<div class="form-group">
				<label for="destiny">To:</label>
				<select class="form-control" name="destiny" required>
					@foreach($locations as $l)
						<option value="{{$l->ID}}">{{$l->ADDRESS}}, {{$l->CITY}}, {{$l->STATE}}.</option>	
					@endforeach
		    	</select>
			</div>
			<div class="form-group">
				<label for="reservation">Reservation date:</label>
				<input type="date" name="reservation" value="<?$date->getTimestamp();?>" min="<?$date->getTimestamp();?>" max="2019-12-31"
				class="form-control" >
			</div>
			<div class="form-group">
				<label for="return">Return date:</label>
				<input type="date" name="return" value="<?$date->getTimestamp();?>" min="<?$date->getTimestamp();?>" max="2019-12-31" class="form-control" required>
			</div>
			<button type="submit" class="btn btn-primary">Save</button>
		</form>
	</div>
</body>
</html>