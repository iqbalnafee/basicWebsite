@extends('layouts.app')

@section('content')
	<h1><center>Home</center></h1>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
@endsection

@section('sidebar')

	@parent
	<p>Home Sidebar.</p>

@endsection

{{--The @section directive, as the name implies, defines a section of content, while the @yield directive is used to display the contents of a given section.--}}

{{--

To show different contents under same section we should put @show in app.blade.php.
To append the extra/different content with parent section content we should put @parent before extra content

--}}

{{--

ctrl+u to view source code
ctrl+f5 to delete cache

--}}