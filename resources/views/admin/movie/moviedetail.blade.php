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
						{{-- scrollspy --}}
						{{-- <div class="container-fluid">
							<h3>Bookings</h3>
							<hr>
							<div class="row">
								<div class="col-4">
									<div class="list-group" id="myScrollspy">
										@foreach($times as $time)
										<a class="list-group-item" href="#ident{{$time['movie_time']}}">{{$time['movie_time']}}</a>
										@endforeach
									</div>
								</div>
								<div class="col-8">
									<div data-spy="scroll" data-target="#myScrollspy" data-offset="10"
									style="height:200px;overflow-y: scroll;	padding:5px; border: 1px solid #ccc;">
									@foreach($times as $time)
										@php
										$items=App\Booking::where('movie_time',$time['movie_time'])->get();
										@endphp
										@foreach ($items as $item)
										<h4 id="ident{{$time['movie_time']}}">Movie Time</h4>
										<p>Movie Time:{{$item->movie_time}}</p>
										<p>Customer Name:{{\App\User::find($item->customer_id)['name']}}</p>
										<hr>
										@endforeach
									@endforeach
								</div>
							</div> --}}
							<div class="container-fluid">
								<h3>Scrollspy with List Group</h3>
								<hr>
								<div class="row">
									<div class="col-4">
										<div class="list-group" id="myScrollspy">
											@foreach($times as $time)
											<a class="list-group-item" href="#ident{{$time['movie_time']}}">{{$time['movie_time']}}</a>
											@endforeach
										</div>
									</div>
									<div class="col-8">
										<div data-spy="scroll" data-target="#myScrollspy" data-offset="10"
										style="height:200px;overflow-y: scroll;padding:5px; border: 1px solid #ccc;">
										@foreach($times as $time)
										@php
										$items=App\Booking::where('movie_time',$time['movie_time'])->get();
										@endphp
										@foreach ($items as $item)
										<h4 id="ident{{$time['movie_time']}}">Movie Time</h4>
										<p>Movie Time:{{$item->movie_time}}</p>
										<p>Customer Name:{{\App\User::find($item->customer_id)['name']}}</p>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo eveniet, quibusdam inventore quo delectus est labore, pariatur repellat quis exercitationem unde qui eligendi. Aut modi harum fugiat, error. Numquam, distinctio.</p>
										<hr>
										@endforeach
									@endforeach
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
@endsection