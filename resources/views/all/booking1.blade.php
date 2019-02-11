@extends('layouts.customer')


@section('title')
<title>Booking</title>

@endsection

@section('content')
{{-- <div class="row">

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

</div> --}}
{{-- @include('layouts.navbar.navbar') --}}

<div class="container-fluid">

	{{-- Start of the Parallax window --}}

	<div class="row">

		<div class="col-12 parallax-window" data-parallax="scroll" data-image-src="http://hdqwalls.com/wallpapers/avengers-infinity-war-official-poster-2018-4o.jpg">

			{{-- Start of the title --}}

			<div class="row">
				<div class="col-12 py-3">
					<div class="btn btn-dark round">
						<h3 class="text-white pt-2">New Arrivals</h3>
					</div>
				</div>
			</div>

			{{-- End of the title --}}

			{{-- Start of the cards --}}

			<div class="row d-flex justify-content-around pb-3">

				{{-- Card-1 --}}
				@foreach ($movies as $movie)
					<div class="col-lg-3 col-md-4 col-sm-6 col-6 d-flex justify-content-center py-3">

					<div class="card card-round bg-dark">
						<img class="card-img-top card-round" src="{{ $movie->media[0]->getUrl() }}" alt="Card image cap">
						<div class="card-body d-flex align-items-end">
							<a href="{{ url('theatre/'.$movie->id) }}"><button class="btn btn-success btn-lg btn-block round"> Get Tickets </button></a>
						</div>
					</div>

				</div>
				@endforeach
				

				{{-- Card-2 --}}

				

				{{-- Card-3 --}}

				

				{{-- Card-4 --}}

				

			</div>

			{{-- End of the cards --}}

		</div>

	</div>

	{{-- End of the Parallax window --}}

	{{-- Parallax window restart here --}}

	<div class="row">

		<div class="col-12 parallax-window" data-parallax="scroll" data-image-src="http://paperlief.com/images/interstellar-wallpaper-4k-wallpaper-3.jpg">

			<div class="row">
				<div class="col-12 py-3">
					<div class="btn btn-dark round">
						<h3 class="text-white pt-2">Re - watch</h3>
					</div>
				</div>
			</div>

			<div class="row d-flex justify-content-around pb-3">

				<div class="col-lg-3 col-md-4 col-sm-6 col-6 d-flex justify-content-center py-3">

					<div class="card card-round bg-dark">
						<img class="card-img-top card-round" src="http://1.bp.blogspot.com/-WCWMCZF1qrg/ViPThYNIj4I/AAAAAAAAAtw/N63JVh3jO-U/s1600/tgf.jpg" alt="Card image cap">
						<div class="card-body d-flex align-items-end">
							<button class="btn btn-success btn-lg btn-block round"> Get Tickets </button>
						</div>
					</div>

				</div>

				<div class="col-lg-3 col-md-4 col-sm-6 col-6 d-flex justify-content-center py-3">

					<div class="card card-round bg-dark">
						<img class="card-img-top card-round" src="https://m.media-amazon.com/images/M/MV5BYmU1NDRjNDgtMzhiMi00NjZmLTg5NGItZDNiZjU5NTU4OTE0XkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_.jpg" alt="Card image cap">
						<div class="card-body d-flex align-items-end">
							<button class="btn btn-success btn-lg btn-block round"> Get Tickets </button>
						</div>
					</div>

				</div>

				<div class="col-lg-3 col-md-4 col-sm-6 col-6 d-flex justify-content-center py-3">

					<div class="card card-round bg-dark">
						<img class="card-img-top card-round" src="https://m.media-amazon.com/images/M/MV5BMTMxNTMwODM0NF5BMl5BanBnXkFtZTcwODAyMTk2Mw@@._V1_.jpg" alt="Card image cap">
						<div class="card-body d-flex align-items-end">
							<button class="btn btn-success btn-lg btn-block round"> Get Tickets </button>
						</div>
					</div>

				</div>

				<div class="col-lg-3 col-md-4 col-sm-6 col-6 d-flex justify-content-center py-3">

					<div class="card card-round bg-dark">
						<img class="card-img-top card-round" src="https://upload.wikimedia.org/wikipedia/en/b/bc/Interstellar_film_poster.jpg" alt="Card image cap">
						<div class="card-body d-flex align-items-end">
							<button class="btn btn-success btn-lg btn-block round"> Get Tickets </button>
						</div>
					</div>

				</div>

			</div>

		</div>

	</div>

	<div class="row">

		<div class="col-12 parallax-window" data-parallax="scroll" data-image-src="https://i.pinimg.com/originals/26/dd/7f/26dd7fd19f06b42bd6c303a8465f67fd.jpg">

			<div class="row">
				<div class="col-12 py-3">
					<div class="btn btn-dark round">
						<h3 class="text-white pt-2">Oscars Nominated</h3>
					</div>
				</div>
			</div>

			<div class="row d-flex justify-content-around pb-3">

				<div class="col-lg-3 col-md-4 col-sm-6 col-6 d-flex justify-content-center py-3">

					<div class="card card-round bg-dark">
						<img class="card-img-top card-round" src="https://images-na.ssl-images-amazon.com/images/I/410yY%2BU925L.jpg" alt="Card image cap">
						<div class="card-body d-flex align-items-end">
							<button class="btn btn-success btn-lg btn-block round"> Get Tickets </button>
						</div>
					</div>

				</div>

				<div class="col-lg-3 col-md-4 col-sm-6 col-6 d-flex justify-content-center py-3">

					<div class="card card-round bg-dark">
						<img class="card-img-top card-round" src="https://d32qys9a6wm9no.cloudfront.net/images/movies/poster/48/885dabdc79a1e472ae30e8f7cb949b81_500x735.jpg?t=1526628589" alt="Card image cap">
						<div class="card-body d-flex align-items-end">
							<button class="btn btn-success btn-lg btn-block round"> Get Tickets </button>
						</div>
					</div>

				</div>

				<div class="col-lg-3 col-md-4 col-sm-6 col-6 d-flex justify-content-center py-3">

					<div class="card card-round bg-dark">
						<img class="card-img-top card-round" src="https://images-na.ssl-images-amazon.com/images/I/613G8iSdVjL._SY741_.jpg" alt="Card image cap">
						<div class="card-body d-flex align-items-end">
							<button class="btn btn-success btn-lg btn-block round"> Get Tickets </button>
						</div>
					</div>

				</div>

				<div class="col-lg-3 col-md-4 col-sm-6 col-6 d-flex justify-content-center py-3">

					<div class="card card-round bg-dark">
						<img class="card-img-top card-round" src="https://images-na.ssl-images-amazon.com/images/I/71rNJQ2g-EL._SY550_.jpg" alt="Card image cap">
						<div class="card-body d-flex align-items-end">
							<button class="btn btn-success btn-lg btn-block round"> Get Tickets </button>
						</div>
					</div>

				</div>

			</div>

		</div>

	</div>

	{{-- Start Footer --}}

	<div class="row">
		<div class="col-12 bg-dark py-5">

			<h6 class="text-white d-flex justify-content-center">&copy; 2019 Elemental</h6>

			<h6 class="text-white d-flex justify-content-center"></h6>

		</div>
	</div>

	{{-- End Footer --}}

</div>

@endsection
