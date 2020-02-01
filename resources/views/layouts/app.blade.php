<!DOCTYPE html>
<html>
	<head>
		<title>Acme</title>
		<link rel="stylesheet" type="text/css" href="/css/app.css">
	</head>
	<body>

		@yield('content')

		@include('inc.sidebar')

		{{--The @include directive includes the contents of sidebar.blade.php which is located at inc folder--}}


	</body>
</html>

{{--The @section directive, as the name implies, defines a section of content, while the @yield directive is used to display the contents of a given section.--}}