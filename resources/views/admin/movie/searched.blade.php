@extends('layouts.adminmaster')

@section('title')
<title>Searched Results</title>
<style>
nav{
	background-color: #2b2b2b;
}

.card-title{
	min-height: 50px;
}

.productimage{
	max-width: 100%;
	max-height: 17rem;
	border-radius: 0.6rem;
}

.detailimage{
	max-width: 100%;
	max-height: 20rem;
	border-radius: 0.6rem;
}

.productcard{
	border-radius: 0.7rem;
	min-height: 22rem;
}

.adcard{
	border-radius: 0.7rem;
	min-height: 12rem;
	box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
	transition: all 0.3s cubic-bezier(.25,.8,.25,1);
}

.adcard:hover{
	box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
}

.form-control{
	border-radius: 10rem;
}

h5{
	color:black;
	text-decoration: none;
	text-align: center;
}

.window{
	max-width: 100%;
	min-height: 17rem;
	border-radius: 0.6rem;
}

.btn{
	border-radius: 10rem;
}

.detail-window{
	border-radius: 0.7rem;
	min-height: 22rem;
}

@media (min-width: 320px) {
	.background{
		height: 48rem;
	}
}

@media (min-width: 356px) {
	.background{
		height: 52rem;
	}
}

@media (min-width: 476px) {
	.background{
		height: 50rem;
	}
}

@media (min-width: 576px) {
	.background{
		height: 50em;
	}
}

@media (min-width: 768px) {
	.background{
		height: 50rem;
	}
}

@media (min-width: 992px) {
	.background{
		height: 50rem;
	}
}

@media (min-width: 1200px) {
	.background{
		height: 45rem;
	}
}

</style>
@endsection

@section('content')

<div class="container-fluid py-5">

	<div class="row">

		@if($m->count()!= 0)
		<h2 class="pl-3 text-white">Searched Products</h2>
		@foreach($m as $p)
		<div class="col-lg-3 col-md-4 col-sm-6 col-12 p-4">
			<div class="card productcard pt-1">
				<div class="window">
					<img class=" productimage rounded mx-auto d-block" src="{{$p->media[0]->getUrl()}}">
				</div>

				<div class="card-body pb-2">
					<h5 class="card-title text-center">{{ $p->name}}</h5>
					<p class="text-center">Description: {{$p->descrption}} </p>
							{{-- <div class="p-2">
								<a href="{{route('product.vote',['id'=>$p->id])}}" class="btn btn-success">Vote</a>
							</div> --}}
							

						</div>
					</div>
					
				</div>
				@endforeach
				@else
				<div>
					<h2 class="text-white">Movie Not found</h2>
					<p class="text-white">There are many movie <a href="">here</a></p>
				</div>
				@endif
			</div>
		</div>
		@endsection