<!DOCTYPE html>
<html>
	<head>
		<title>Acme</title>
		<link rel="stylesheet" type="text/css" href="/css/app.css">
	</head>
	<body>

		@include('inc.navbar')


		<div class="container">
			<div class="row">
				<div class="col-md-4 col-lg-4">
					@include('inc.sidebar')
				</div>
				<div class="col-md-8 col-lg-8">
					@yield('content')
				</div>
			</div>
		</div>	

		{{--The @include directive includes the contents of sidebar.blade.php which is located at inc folder--}}


	</body>
</html>

{{--The @section directive, as the name implies, defines a section of content, while the @yield directive is used to display the contents of a given section.--}}