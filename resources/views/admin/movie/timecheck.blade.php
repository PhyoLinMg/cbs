@extends('layouts.adminmaster')

@include('admin.header')
@section('title')
<title>Time Checking</title>
@endsection
@section('content')
<div class="main-panel">
	<div class="content-wrapper back-ter">
		<div class="row">
			<div class="col-md-12 grid-margin stretch-card">
				<div class="card back-prime">
					<div class="card-body">
						<form action="{{ url('movie/create1') }}" method="post">
							@csrf
							<div class="form-group">
								<label for="time">Time</label>
								<select style="border: solid black 0.1px;" class="form-control" name="time" id="time">
									<option value="01:00am">01:00A M</option>
									<option value="10:00am">10:00AM</option>
								</select>
							</div>
							<div class="form-group">
								<label for="room">Room</label>
								<select style="border: solid black 0.1px;" class="form-control" name="room" id="room">
									@foreach($rooms as $room)
									<option value="{{$room->id}}">{{$room->name}}</option>
									@endforeach
								</select>
							</div><div class="form-group">
								<label for="startdate">Start Date</label>
								<input type="date" id="startdate" name="startdate">
							</div>
							
							<div>
								<button type="submit" id='submit-all' class="btn btn-success mr-2">Submit</button>
							</div>
						</form>	
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection