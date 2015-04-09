<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>Hi {{ $name }}</h2>

		<div>
		New job posted titled {{ $title }}, link {{ URL::to('vacancy', $vid) }}
		</div>
	</body>
</html>