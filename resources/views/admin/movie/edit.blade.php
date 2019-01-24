@extends('layouts.adminmaster')
@section('title')
<title>Movie</title>
@endsection
@include('admin.header')
@section('content')

<div class="main-panel">
	<div class="content-wrapper back-ter">
		<div class="row">
			<div class="col-md-12 grid-margin stretch-card">
				<div class="card back-prime">
					<div class="card-body">
						
						<h4 class="card-title"><b><i>Product Editing form</i></b></h4>
						<form id='my' method="post" action = "{{ route('movie.update',$movie->id) }}" enctype='multipart/form-data' >
							{{ method_field("put") }}
							@csrf
							<div class="form-group">
								<label for="name">Movie Name</label>
								@if($errors->has("name"))
								<input type="text" class="form-control is-invalid" name="name" id="name"  placeholder="Enter the product name" value="{{ old('name')}} ">
								<div class="invalid-feedback">
									{{ $errors->first("name") }}
								</div>
								@else
								<input type="text" class="form-control" name="name" placeholder="Enter the product name" value="{{ $movie->name }} ">
								@endif
							</div>
							<div class="form-group">
								<label for="room">Room</label>
								<select style="border: solid black 0.1px;" class="form-control" name="room" id="">
									@foreach($rooms as $room)
									<option value="{{$room->id}}">{{$room->name}}</option>
									@endforeach
								</select>

							</div>
							<div class="form-group">
								<label for="startdate">Start Date</label>
								<input type="date" id="startdate" name="startdate">
							</div>
							<div class="form-group">
								<label for="enddate">End Date</label>
								<input type="date" id="enddate" name="enddate">
							</div>

							<div class="form-group">
								<label for="description">Description</label>
								@if($errors->has('quantity'))
								<textarea class="form-control" name="description" id="description" rows="5" value=" {{ old('description') }}"></textarea>
								<div class="invalid-feedback">
									{{ $errors->first("quantity") }}
								</div>
								@else
								<textarea class="form-control" name="description" id="description" rows="5" value=" ">{{ $movie->descrption }}</textarea>
								@endif
								<div>
									<button type="submit" id='submit-all'class="btn btn-success mr-2">Submit</button>
								</div>

							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section("script")
<script>  
	$(document).ready(function() {
		$('#types').select2();
	});
</script>
@endsection