@extends('default')

@section('content')

	<div class="d-flex justify-content-end mb-3"><a href="{{ route('types.create') }}" class="btn btn-info">Create</a></div>

	<table class="table table-bordered">
		<thead>
			<tr>
				<th>id</th>
				<th>libelle</th>

				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($types as $type)

				<tr>
					<td>{{ $type->id }}</td>
					<td>{{ $type->libelle }}</td>

					<td>
						<div class="d-flex gap-2">
                            <a href="{{ route('types.edit', [$type->id]) }}" class="btn btn-primary">Edit</a>
                            {!! Form::open(['method' => 'DELETE','route' => ['types.destroy', $type->id]]) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </div>
					</td>
				</tr>

			@endforeach
		</tbody>
	</table>

@stop
