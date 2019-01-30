@extends('layouts.customer')


@section('title')
<title>Booking</title>

@endsection

@section('content')
<div class="row	">

	@foreach($movies as $movie)

	<div class="col-12 col-md-6 col-lg-3 m-2">
		
	<a style="text-decoration: none" href="{{ url('theatre/'.$movie->id) }}">
	<div class="card " style="width: 18rem; ">
  <img class="card-img-top" style="max-height:10rem;"  src="{{ $movie->media[0]->getUrl() }}" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">{{ $movie->name }}</p>
    <p class="card-text">{{ $movie->descrption }}</p>
  </div>
</div>
</a>


</div>
@endforeach


</div>

@endsection