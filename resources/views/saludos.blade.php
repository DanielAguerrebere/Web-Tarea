<!DOCTYPE html>
<html>
<head>
	<title>Laravel Testing</title>
</head>
<body>
	<table>
		@foreach($categories as $c)
			<tr>
				<td>{{$c->name}}</td>
			</tr>
		@endforeach
	</table>
	{!!$categories->render()!!}
</body>
</html>