@extends('default')

@section('content')

	<div class="d-flex justify-content-end mb-3"><a href="{{ route('formations.create') }}" class="btn btn-dark">Create</a></div>

	<table class="table table-bordered">
		<thead>
			<tr>
				<th>id</th>
				<th>Nom</th>
				<th>Duree (mois)</th>
				<th>Description</th>
				<th>isStarted</th>
				<th>dateDebut</th>

				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($formations as $formation)

				<tr>
					<td>{{ $formation->id }}</td>
					<td>{{ $formation->nom }}</td>
					<td>{{ $formation->duree }}</td>
					<td>{{ $formation->description }}</td>
					@if($formation->isStarted == 1)
						<td> Oui </td>
					@else
						<td> Non </td>
					@endif
					<td>{{ $formation->dateDebut }}</td>

					<td>
						<div class="d-flex gap-2">
                            <a href="{{ route('formations.show', [$formation->id]) }}" class="btn btn-info">Show</a>
                            <a href="{{ route('formations.edit', [$formation->id]) }}" class="btn btn-primary">Edit</a>
                            {!! Form::open(['method' => 'DELETE','route' => ['formations.destroy', $formation->id]]) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </div>
					</td>
				</tr>

			@endforeach
		</tbody>
	</table>

@stop
