@extends('layouts.app')

@section('content')
	<h1><center>Home</center></h1>
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