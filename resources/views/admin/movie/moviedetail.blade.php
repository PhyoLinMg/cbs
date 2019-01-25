@extends('layouts.adminmaster')

@section('title')
<title>Movie Detail</title>
<style>
#shit{
	position: relative;
}
</style>
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
							<h3>Scrollspy with List Group</h3>
							<hr>
							<div class="row">
								<div class="col-4">
									<div class="list-group" id="myScrollspy">
										@foreach($bookings as $booking)
										<a class="list-group-item" href="#{{$booking->movie_time}}">{{$booking->movie_time}}</a>
										@endforeach

									</div>
								</div>
								<div class="col-8">
									<div data-spy="scroll" data-target="#myScrollspy" data-offset="10"
									style="height:200px;overflow-y: scroll;padding:5px; border: 1px solid #ccc;">
									@foreach($bookings as $booking)
									<h4 id="{{$booking->movie_time}}">Movie Time</h4>
									<p>{{$booking->movie_time}}</p>

									@endforeach
								
							</div>
						</div>
						<hr>
						Other Contents ...
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
@endsection