@extends('layouts.default')
@section('content')
	<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Cars			
							</h1>	
							<p class="text-white link-nav"><a href="{{route('home')}}">Home </a>  <span class="lnr lnr-arrow-right"></span><a href="{{route('showCarsList')}}cars<span class="lnr lnr-arrow-right"></span>delete</p>
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->
					<div class="section-top-border">
						<h3 class="mb-30">Cars: {{$cars->count()}}</h3>
						<div class="progress-table-wrap">
							<div class="progress-table">
								<div class="table-head">
									<div class="serial">#</div>
									<div class="serial">Date</div>
									<div class="serial">Brand</div>
									<div class="serial">Model</div>
									<div class="serial">Km</div>
									<div class="serial">Price($)</div>
									<div class="serial">Bookings</div>
									
								</div>
								 @foreach($cars as $car)
								<div class="table-row">
									<div class="serial">{{$car->id}}</div>
									<div class="serial">{{ Carbon\Carbon::parse($car->created_at)->format('d-m-Y  H:i') }}</div>
									<div class="serial">{{$car->mark->name}}</div>
									<div class="serial">{{$car->model}}</div>
									<div class="serial">{{$car->mileage }}</div>
									<div class="serial">{{$car->price }}</div>
									<div class="serial">{{$car->bookings->count()}}</div>
									<div class="serial"><a href="{{route('handleDeleteCar',['id'=>$car->id])}}">Delete this car</a></div>	
								</div>
								@endforeach
							</div>
						</div>
					</div>
					@endsection
