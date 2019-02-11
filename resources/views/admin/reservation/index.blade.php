@extends('layouts.adminmaster')

@section('title')
<title>Reservation Confirmation</title>
@endsection
@include('admin.header')

@section('content')

<div class="main-panel">
	<div class="content-wrapper back-ter">
		<div class="row">
			<div class="col-md-12 grid-margin stretch-card">
				<div class="card back-prime">
					<div class="card-body">
						<table class="table table-hover">
							<thead>
								<tr>
									<td>Name</td>
									<td>Phone Number</td>
									<td>Seats</td>
									<td></td>
									<td></td>
								</tr>
							</thead>
							<tbody>
								@foreach ($bookings as $booking)
								
								<tr>
									<td>{{$booking->name}}</td>
									<td>{{$booking->phno}}</td>
									<td>
										@foreach ($booking->seats as $seat)
											<span>{{$seat['name']}}</span>
										@endforeach
									</td>
									<td><a href="{{ route('confirm',$booking->id) }}" class="btn btn-primary">Confirm</a></td>
									<td><a href="{{ route('bookingdelete',$booking->id) }}" class="btn btn-danger">Delete</a></td>
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

