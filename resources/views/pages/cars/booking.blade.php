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
							<p class="text-white link-nav"><a href="{{route('home')}}">Home</a><span class="lnr lnr-arrow-right"></span><a href="{{route('showCarsList')}}">Cars<span class="lnr lnr-arrow-right"></span>Booking Car</p>
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->
	<section class="model-area section-gap" id="cars">
				<div class="container">

					<div class="row d-flex justify-content-center pb-40">
						<div class="col-md-8 pb-40 header-text">
							<h1 class="text-center pb-10">Confirm your booking </h1>
							<h6 class="text-center">
							Welcome<strong> {{Auth::user()->firstName}} {{  Auth::user()->lastName}}</strong>
							To confirm your booking, please send your deposit by payment online. 
							</h6>
						</div>
					</div>	

					<div class="col-lg-8 col-md-8 single-blog">
							<div class="thumb">
								<img class="img-fluid" src="{{asset($car->photo)}}" alt="">								
							</div>
							<p class="date">{{ \Carbon\Carbon::parse($pickUp)->format('d-m-Y')}}</p>
							<p class="date">{{ \Carbon\Carbon::parse($dropOff)->format('d-m-Y')}}</p>

							<a href=""><h4>{{$car->model}}</h4></a>
							<p>
									Capacity         : {{$car->people}} Person <br>
									Doors            : {{$car->doors}} <br>
									Mileage          : {{$car->mileage}} km <br>
									Transmission     : {{$car->transmission}}<br>
									Price/day        :{{$car->price}}
							</p>
							<div class="meta-bottom d-flex justify-content-between pb-40">
								<h5>Amount:{{\Carbon\Carbon::parse($pickUp)->diffInDays(\Carbon\Carbon::parse($dropOff))*$car->price}} Dollar</h4>
							</div>									
						
								
								<form class="form" role="form" method="post" action="{{route('handleBookingCar',['id'=>$car->id,'pickUp'=>$pickUp,'dropOff'=>$dropOff])}}">

								{{ csrf_field() }}
							    <div class="form-group row">
							        <div class="col-md-12">
							            <button type="submit" class="text-uppercase primary-btn" >Ok </button>
							        </div>
							    </div>
							</form>
						</div>
				</div>	
			</section>
			@endsection