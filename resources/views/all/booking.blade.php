@extends('layouts.customer')

@section('title')
<title>Booking</title>

@endsection
@section('content')
<div class="" 	>
	<link rel="stylesheet" href="{{ asset('css/all.css') }}">
	<div class="row">
		<h2 class="col-12 col-md-12 col-lg-12">Make Ur Booking to reserve Seats! </h2>
		<div class="col-md-3 col-lg-3 col-12 mt-1 info">
			<div class="colorgreen mr-2"></div>
			<span>  available seats </span>
	

		</div>


		<div class="col-md-3 col-lg-3 col-12 mt-1 info ">
			<div class="colorred mr-2"></div>
			<span>  reserved seats </span>
		</div>
		<div class="col-md-3 col-lg-3 col-12 mt-1 info ">
			<div class="colorblack mr-2"></div>
		<span>  Your seats </span>
		</div>
		<div class="col-md-3 col-lg-3 col-12 mt-1 info">
			<a href="{{ route('pdfdownload') }}" class="btn btn-danger"><i class="mdi mdi-download">&nbsp;&nbsp;<i class="mdi mdi-file-pdf"></i></i></a>
		</div>
		
	</div>
 <ex></ex>

</div>




@endsection