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
							<h3>Ticket Sold</h3>
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
										@foreach($solds as $sold)
											<tr>
												<td>{{$sold->id}}</td>
												<td>{{$sold->name}}</td>
												<td>@foreach ($sold->seats as $seat)
													<span>{{$seat['name']}}</span>
												@endforeach</tr>
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