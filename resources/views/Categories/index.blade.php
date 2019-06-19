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
				<td>{{$c->cars->count()}}</td>
			</tr>
		@endforeach
	</table>
</body>
</html>