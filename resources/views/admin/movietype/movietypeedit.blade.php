@extends('layouts.adminmaster')
@section('title')
<title>Edit Movie Type</title>
@endsection
@include('admin.header')
@section('content')

<div class="container">
	<div class="row">
		<div class="col">
			<div class="card-body">
				<form method="post" action="{{ route('movie.update',$movietype->id) }}">
					{{ method_field("put") }}
					{{ csrf_field() }}
					<div class="form-group">
						<label for="name">Type of Movie</label>

						@if($errors->has("name"))
						<input name="name" type="text" class="form-control is-invalid" id="name" aria-describedby="textHelp" placeholder="Type of Movie" value="{{ old('name') }}">
						<div class="invalid-feedback">
							{{ $errors->first("name") }}
						</div>
						@else
						<input name="name" type="text" class="form-control" id="name" aria-describedby="textHelp" placeholder="Category Name" value="{{ $movietype->name }}">

						@endif

					</div>

					<button type="submit" class="btn btn-primary">Edit</button>
				</form>
			</div>
		</div>
	</div>
</div>
@stop