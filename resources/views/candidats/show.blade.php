@extends('default')

@section('content')

	{{ $candidat->id }}

	<div>
			<h3>Formations choisis</h3>
			<ul>
				@foreach ($candidat->formations as $formation)
					<li>{{ $formation->nom }}</li>
				@endforeach
			</ul>

			<h3>Choissisez une formation</h3>
			<form action="{{ route('candidats.storeFormation', [$candidat->id]) }}" method="post">
				@csrf
				<a>{{$candidat->id}}</a>
				<select name="formation_id">
					@foreach ($formatione as $formation)
						<option value="{{ $formation->id }}">{{ $formation->nom }}</option>
					@endforeach
				</select>
				<button type="submit">Ajouter</button>
			</form>

	</div>

@stop