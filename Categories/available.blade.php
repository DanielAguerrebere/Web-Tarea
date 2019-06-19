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
		<form action="{{route('cars_available')}}" method="post">
			<div class="form-group">
				<label for="category_id">Categories:</label>
		    	<select class="form-control" name="category_id">
					@foreach($categories as $c)
						<option value="{{$c->id}}">{{$c->name}} ({{$c->cost}})</option>	
					@endforeach
		    	</select>
		    	<button type="submit" class="btn btn-primary">Save</button>
			</div>
		</form>
	</div>
</body>
</html>