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
							<p class="text-white link-nav"><a href="{{route('home')}}"> Home</a><span class="lnr lnr-arrow-right"></span><a href="{{route('showCarsList')}}"> Cars</p>						
						</div>
					</div>
				</div>
			</section>
			<!-- End banner Area --> 
<section class="model-area section-gap" id="cars">
				<div class="container">

					<div class="row d-flex justify-content-center pb-40">
						<div class="col-md-12 pb-10 header-text">
							<h3 class="text-center pb-10">Cars available from {{\Carbon\Carbon::parse($pickUp)->format('d-m-Y')}} to {{\Carbon\Carbon::parse($dropOff)->format('d-m-Y')}}</h3>

						</div>
						
					</div>	

					 @foreach($cars as $key=>$car)

						<div class="row align-items-center single-model item ">
						 @if($key%2==0)	
							<div class="col-lg-6 model-left ">
								<div class="title justify-content-between d-flex">
									<h4 class="mt-20">{{$car->model}}</h4>
									<h2>${{$car->price}}<span>/day</span></h2>
								</div>
								
								<p>
									Capacity         : {{$car->people}} Person <br>
									Doors            : {{$car->doors}} <br>
									Mileage    : {{$car->mileage}} km <br>
									Transmission     : {{$car->transmission}}
								</p>
								<a class="text-uppercase primary-btn" href="{{route('showBookingCar',['id'=>$car->id,'pickUp'=>$pickUp,'dropOff'=>$dropOff])}}">Book it</a>
							</div>
							<div class="col-lg-6 model-right">
								<img class="img-fluid" src="{{asset($car->photo)}}" alt="">
							</div>
							@else
							<div class="col-lg-6 model-right">
								<img class="img-fluid" src="{{asset($car->photo)}}" alt="">
							</div>
							<div class="col-lg-6 model-left ">
								<div class="title justify-content-between d-flex">
									<h4 class="mt-20">{{$car->model}}</h4>
									<h2>${{$car->price}}<span>/day</span></h2>
								</div>
								
								<p>
									Capacity         : {{$car->people}} Person <br>
									Doors            : {{$car->doors}} <br>
									Mileage    : {{$car->mileage}} km <br>
									Transmission     : {{$car->transmission}}
								</p>
								<a class="text-uppercase primary-btn" href="{{route('showBookingCar',['id'=>$car->id,'pickUp'=>$pickUp,'dropOff'=>$dropOff])}}">Book it</a>
							</div>
							@endif
						
						</div>
							@endforeach	
												
				
				</div>	
			</section>
			@endsection