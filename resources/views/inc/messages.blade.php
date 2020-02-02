@if( count($errors) > 0 )
	
	@foreach($errors->all() as $error)

		<div class="alert alert-danger">
			{{$error}}
		</div>

	@endforeach

@endif

@if(session('success'))

	<div class="alert alert-success">
		
		{{'Message sent successfully'}}

	</div>

@endif

{{--To show all errors--}}