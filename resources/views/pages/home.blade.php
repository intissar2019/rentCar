@extends('layouts.default')
@section('content')
<section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>	
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-center">
						<div class="banner-content col-lg-7 col-md-6 ">
							<h6 class="text-white ">the Royal Essence of Journey</h6>
							<h1 class="text-white text-uppercase">
								Relaxed Journey Ever				
							</h1>
							<p class="pt-20 pb-20 text-white">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
							</p>
							<a href="{{ route('showCarsList') }}" class="primary-btn text-uppercase">Show Our Cars</a>
						</div>
						<div class="col-lg-5  col-md-6 header-right">
							<h4 class="text-white pb-30">Book Your Car Today!</h4>
							@if ($errors->any())
   								<div class="alert text-danger">
       								<ul>
           								@foreach ($errors->all() as $error)
              							 <li>{{ $error }}</li>
        								 @endforeach
      								 </ul>
 								  </div>
							@endif

							<form class="form" role="form" autocomplete="off" method="post" action="{{route('handleSearchCars')}}">
									{{ csrf_field() }}
							    <div class="form-group row">
							        <div class="col-md-4 wrap-left">
								       	<div class="default-select" id="default-select""><h5 class="text-white pb-30">Pick up at : </h5></div>
							        </div>
							        <div class="col-md-8 wrap-right">
										<div class="input-group ">                                          
											<input id="datepicker" class=" form-control" id="exampleAmount" placeholder="Date & time" type="date" name="pickUp">                        
											<div class="input-group-prepend">
												<span  class="input-group-text"><span class="lnr lnr-calendar-full"></span></span>
											</div>											
										</div>
							        </div>
							    </div>
							    <div class="form-group row">
							        <div class="col-md-4 wrap-left">
								       	<div class="default-select" id="default-select""><h5 class="text-white pb-30">Drop off at : </h5></div>
							        </div>
							        <div class="col-md-8 wrap-right">
										<div class="input-group dates-wrap">                                              
											<input id="datepicker2" class="dates form-control" id="exampleAmount" placeholder="Date & time" type="date" name="dropOff">                        
											<div class="input-group-prepend">
												<span  class="input-group-text"><span class="lnr lnr-calendar-full"></span></span>
											</div>											
										</div>
							        </div>
							    </div>							    
							  

							    <div class="form-group row">
							        <div class="col-md-12">
							            <button type="submit" class="btn btn-default btn-lg btn-block text-center text-uppercase">Search Booking</button>
							        </div>
							    </div>
							    <p class="text-default">*Each reservation starts 12:00 </p>
							</form>
						</div>											
					</div>
				</div>					
			</section>
			<!-- End banner Area -->	
		

			<!-- Start model Area -->
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
					<div class="active-model-carusel">
						 @foreach($cars as $car)
						<div class="row align-items-center  item mb-4 pb-120 pt-120 " style="background-image:url('{{asset($car->photo)}}'); background-position: center;background-size: cover; ">
							
							<div class="col-lg-12 ">
								<div class="title justify-content-between d-flex ml-40">
									<h3 class="header-text text-uppercase ml-30">{{$car->model}}</h3>
									
								</div>
								
								<p class="text-white mt-30 ml-30 mb-30">
									price            :${{$car->price}}<span>/day</span><br>
									Capacity         : {{$car->people}} Person <br>
									Doors            : {{$car->doors}} <br>
									Mileage    : {{$car->mileage}} km <br>
									Transmission     : {{$car->transmission}}
								</p>
								<a class="text-uppercase primary-btn align-items-center ml-30" href="{{route('home')}}">Reserve Now</a>
							</div>
						</div>
							@endforeach						
					</div>
				</div>	
			</section>
			<!-- End model Area -->
			@endsection
			