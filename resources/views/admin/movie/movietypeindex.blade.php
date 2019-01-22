@extends('layouts.adminmaster')
@section('title')
<title>Movie</title>
@endsection

@section('content')
@include('admin.header')
<div class="main-panel">
	<div class="content-wrapper back-ter">
		<div class="row">
			<div class="col-md-12 grid-margin stretch-card">
				<div class="card back-prime">
					<div class="card-body">
						<a href="{{ route('movie.create') }}" class="btn btn-primary">Add movie</a>
						<table class="table table-dark">
							<thead>
								<tr>
									<td>ID</td>
									<td>Name</td>
									<td></td>
								</tr>	
							</thead>
							<tbody>
								@foreach($movies as $movie)
								<tr>
									<td>{{$movie->id}}</td>
									<td>{{$movie->name}}</td>
									<td><a href="{{route('movie.edit',$movie->id)}}" class="btn btn-success">Edit</a></td>
									<td><form action="{{ route("movie.destroy", $movie->id) }}"
										method="post">
										{{ csrf_field() }}
										<input type="hidden" name="_method" value="delete">
										<button class="btn btn-danger" type="submit">Delete</button>
									</form></td>
								</tr>
								@endforeach
							</tbody>
						</table>



					</div>

				</div>
			</div>
		</div>
	</div>
</div>
@endsection