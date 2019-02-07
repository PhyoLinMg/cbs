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
									<td></td>
									<td></td>
									<td>Confirm??</td>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td></td>
									<td></td>
									<td><a href="{{ route('confirm',1) }}" class="btn btn-primary">Confirm</a></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

