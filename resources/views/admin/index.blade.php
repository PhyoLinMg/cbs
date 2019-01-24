@extends('layouts.adminmaster')
@section("title")
<title>Admin Panel</title>
@endsection
@include('admin.header')
@section('content')
<div class="main-panel">
	<div class="content-wrapper back-ter">
		<div class="row">
			<div class="col-md-12 grid-margin stretch-card">
				<div class="card back-prime">
					<div class="card-body">
						<div class="media">
							<i class="mdi mdi-movie"></i>
							<div class="media-body">
								<h5 class="mt-0">Total Movie:{{App\Movie::count()}}</h5>
							</div>
							<i class="mdi mdi-calendar-plus"></i>
							<div class="media-body">
								<h5 class="mt-0">Bookings:{{App\Booking::count()}}</h5>
							</div>
						</div>
						<h3 style="padding: 20px;">List of Movie Currently Showing</h3>
						<div class="list-group">

							@foreach($movies as $movie)
								<a href="#" class="list-group-item list-group-item-action">
								{{$movie->name}}
							</a>
							@endforeach
							
							
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection