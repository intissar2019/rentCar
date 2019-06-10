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
							<p class="text-white link-nav"><a href="{{route('home')}}"> Home</a><span class="lnr lnr-arrow-right"></span><a href="{{route('showCarsList')}}">Cars</a><span class="lnr lnr-arrow-right"></span>{{$cars->first()->mark->name}}</p>
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->
			<section class="model-area section-gap" id="cars">
				<div class="container">

					<div class="row d-flex justify-content-center pb-40">
						<div class="col-md-8 pb-40 header-text">
							<h1 class="text-center pb-10">{{$cars->first()->mark->name}}</h1>
							<p class="text-center">
								Who are in extremely love with eco friendly system.
							</p>
						</div>
					</div>	

				<div class="row">
						 @foreach($cars as $car)
						<div class="col-lg-3 col-md-6 single-blog">
							<div class="thumb">
								<img class="img-fluid" src="{{asset($car->photo)}}" alt="">								
							</div>
							<p class="date">{{\Carbon\Carbon::parse($car->created_at)->format('d-m-Y')}}</p>
							<a href="{{route('home')}}"><h4>{{$car->model}}</h4></a>
						
								
								<p>
									
								{{$car->people}} Person, {{$car->doors}} doors, {{$car->mileage}} km,{{$car->transmission}}
								</p>
						
							<div class="meta-bottom d-flex justify-content-between">
								<p><strong>{{$car->price}} Dolar/day</strong></p>
								<p>{{$car->bookings->count()}} Bookings</p>	
							</div>
						</div>
							@endforeach							
				
				</div>													
				</div>	
			</section>
			@endsection