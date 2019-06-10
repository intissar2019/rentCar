@extends('layouts.default')
@section('content')
	<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h3 class="text-white">
								Hello, {{Auth::user()->firstName}} {{Auth::user()->lastName}} 			
							</h3>	
							<p class="text-white link-nav"><a href="{{route('home')}}">Home </a>  <span class="lnr lnr-arrow-right"></span>Your Bookings</p>
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->
					<div class="section-top-border">
						<h3 class="mb-30">Bookings: {{$bookings->count()}}</h3>
						<div class="progress-table-wrap">
							<div class="progress-table">
								<div class="table-head">
									<div class="serial">#</div>
									<div class="serial">Date</div>
									<div class="serial">Amount</div>
									<div class="serial">Car</div>
									<div class="serial">Pickup</div>
									<div class="serial">Dropoff</div>	
								</div>
								 @foreach($bookings as $booking)

								<div class="table-row" @if($booking->pickUp< now()) style=" color:red"@endif>
									<div class="serial">{{$booking->id}}</div>
									<div class="serial">{{ Carbon\Carbon::parse($booking->created_at)->format('d-m-Y  H:i') }}</div>
									<div class="serial">{{\Carbon\Carbon::parse($booking->pickUp)->diffInDays(\Carbon\Carbon::parse($booking->dropOff))*$booking->car->price}} Dolar</div>
									<div class="serial">{{$booking->car->model}}</div>
									<div class="serial">
										{{ Carbon\Carbon::parse($booking->pickUp)->format('d-m-Y') }}</div>
									<div class="serial">{{ Carbon\Carbon::parse($booking->dropOff)->format('d-m-Y') }}</div>
									<div class="serial">@if($booking->status=='confirm' && $booking->pickUp>= now())<a href="{{route('showPaymentBooking')}}"><span>click to Pay</span></a>@elseif($booking->status=='wait') {{$booking->status}}@endif</div>	
								</div>
								
								@endforeach
							</div>
						</div>
					</div>
					@endsection
