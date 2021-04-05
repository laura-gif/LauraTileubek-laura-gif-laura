<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form method ="POST" action="{{route('add-la')}}" >
		@csrf
		<input type="text" name="name" placeholder="name">
		<input type="text" name="surname" placeholder="surname">
		<input type="email" name="email" placeholder="email">
		<input type="file" name="img" placeholder="img">
		<button type="submit">Submit</button>

</body>
</html>