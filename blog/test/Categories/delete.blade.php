<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<!-- Required meta tags -->
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<meta charset="utf-8"></meta>
	<title>Laravel delete</title>
</head>
<body>
	<div class="container my-5">
		<form action="{{route('cars_index')}}" method="post">
			{{csrf_field()}}
			<div class="form-group">
				<label for="category_id">Cars:</label>
    			<select class="form-control" name="category_id">
				    @foreach($cars as $c)
						<option value="{{$c->id}}">{{$c->brand}} {{$c->model}}</option>	
					@endforeach
    			</select>
			</div>
			<button type="submit" class="btn btn-primary">Delete</button>
		</form>
	</div>
</body>
</html>