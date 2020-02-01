@extends('layouts.app')

@section('content')
	<h1><center>Contact</center></h1>

	{{--Laravel Collectives--}}

	{!! Form::open(['url' => 'contact/submit']) !!}

		{{--contact/submit is the url where the form will be submitted--}}
    	<div class="form-group">

    		{{Form::label('name', 'Username: ')}}
    		{{Form::text('name', '',['class' => 'form-control','placeholder' => 'Enter name'])}}
    		
    	</div>
    	<div class="form-group">
    		{{Form::label('email', 'E-Mail Address:')}}
    		{{Form::text('email', '',['class' => 'form-control','placeholder' => 'Enter Email'])}}
    	</div>
    	<div class="form-group">
    		{{Form::label('message', 'Your Message:')}}
    		{{Form::textarea('message','',['class' => 'form-control','placeholder' => 'Enter Message'])}}
    	</div>

    	<div>
    		{{Form::submit('Submit',['class' => 'btn btn-primary'])}}
    	</div>
	{!! Form::close() !!}
@endsection




{{--The @section directive, as the name implies, defines a section of content, while the @yield directive is used to display the contents of a given section.--}}