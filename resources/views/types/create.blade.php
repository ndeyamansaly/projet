@extends('default')

@section('content')

	@if($errors->any())
		<div class="alert alert-danger">
			@foreach ($errors->all() as $error)
				{{ $error }} <br>
			@endforeach
		</div>
	@endif

	{!! Form::open(['route' => 'types.store']) !!}

		<div class="mb-3">
			<table class="">
				<tr>
			        <td>{{ Form::label('libelle', 'Libelle', ['class'=>'form-label']) }}</td>
			        <td>{{ Form::text('libelle', null, array('class' => 'form-control')) }}</td>
				</tr>
			</table>
		</div>


		{{ Form::submit('Create', array('class' => 'btn btn-success')) }}

	{{ Form::close() }}


@stop