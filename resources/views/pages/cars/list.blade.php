@extends('layouts.default')
@section('content')
<section class="model-area section-gap" id="cars">
				<div class="container">

					<div class="row d-flex justify-content-center pb-40">
						<div class="col-md-8 pb-40 header-text">
							<h1 class="text-center pb-10">Choose your Desired Car Model</h1>
							<p class="text-center">
								Who are in extremely love with eco friendly system.
							</p>
						</div>
					</div>	

					 @foreach($cars as $car)
						<div class="row align-items-center single-model item mb-4">
							
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
								<a class="text-uppercase primary-btn" href="#">Book This Car Now</a>
							</div>
							<div class="col-lg-6 model-right">
								<img class="img-fluid" src="{{asset($car->photo)}}" alt="">
							</div>
						
						</div>
							@endforeach	

														
				
				</div>	
			</section>
			@endsection