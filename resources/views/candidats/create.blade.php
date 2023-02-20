@extends('default')

@section('content')

	@if($errors->any())
		<div class="alert alert-danger">
			@foreach ($errors->all() as $error)
				{{ $error }} <br>
			@endforeach
		</div>
	@endif

	{!! Form::open(['route' => 'candidats.store']) !!}

		<div class="mb-3">
			<table class="">
				<tr>
					<td>{{ Form::label('nom', 'Nom', ['class'=>'form-label']) }}</td>
					<td>{{ Form::text('nom', null, array('class' => 'form-control')) }}</td>
				</tr>
			</table>
		</div>
		<div class="mb-3">
			{{ Form::label('prenom', 'Prenom', ['class'=>'form-label']) }}
			{{ Form::text('prenom', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('age', 'Age', ['class'=>'form-label']) }}
			{{ Form::number('age', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('email', 'Email', ['class'=>'form-label']) }}
			{{ Form::text('email', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('niveauEtude', 'NiveauEtude', ['class'=>'form-label']) }}
			{{ Form::select('niveauEtude', $niveau, null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('sexe', 'Sexe', ['class'=>'form-label']) }}
			{{ Form::select('sexe', $genre, null, array('class' => 'form-control')) }}
		</div>


		{{ Form::submit('Create', array('class' => 'btn btn-success')) }}

	{{ Form::close() }}


@stop