@extends('layouts.adminmaster')

@section('title')
<title>Movie Detail</title>
@endsection
@include('admin.header')
@section('content')
<div class="main-panel">
	<div class="content-wrapper back-ter">
		<div class="row">
			<div class="col-md-12 grid-margin stretch-card">
				<div class="card back-prime">
					<div class="card-body">

						<div class="card" style="width: 18rem;">
							@php
							$medias=$movie->getMedia();
							@endphp
							@foreach($medias as $media)
							<img src="{{$media->getUrl()}}" alt="" style="width: 18rem;height: 300px;" class="card-img-top">
							@endforeach
							<div class="card-body">
								<p class="card-text">{{$movie->name}}</p>
							</div>
						</div>
						<div class="container-fluid">
							<h3>Movie Booking</h3>
							<hr>
							<div class="row">
								<table class="table table-striped">
									<thead>
										<tr>
											<td>ID</td>
											<td>Name</td>
											<td>Time</td>
										</tr>
									</thead>
									<tbody>
										@foreach($bookings as $booking)
											<tr>
												<td>{{$booking->id}}</td>
												<td>{{App\User::find($booking->customer_id)->name}}</td>
												<td>{{$booking->movie_time}}</td>
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
	</div>
	@endsection