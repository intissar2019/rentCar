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
							<p class="text-white link-nav"><a href="{{route('home')}}">Home </a>  <span class="{{route('showCheckBooking')}}"></span> Bookings<span class="lnr lnr-arrow-right"></span> Confirm/Refuse</p>
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
									<div class="percentage">Date</div>
									<div class="percentage">Amount</div>
									<div class="percentage">Full name</div>
									<div class="percentage">Address</div>
									<div class="percentage">Car</div>
									<div class="percentage">Pick up</div>
									<div class="percentage">Drop off</div>
									
								</div>
								 @foreach($bookings as $booking)
								<div class="table-row">
									<div class="serial">{{$booking->id}}</div>
									<div class="percentage">{{$booking->created_at}}</div>
									<div class="percentage">{{\Carbon\Carbon::parse($booking->pickUp)->diffInDays(\Carbon\Carbon::parse($booking->dropOff))*$booking->car->price}} Dolar</div>
									<div class="percentage">{{$booking->user->firstName}} {{$booking->user->lastName}}</div>
									<div class="percentage">{{$booking->user->address}}</div>
									<div class="percentage">{{$booking->car->model}}</div>
									<div class="percentage">{{$booking->pickUp}}</div>
									<div class="percentage">{{$booking->dropOff}}</div>
									
								</div>
								@endforeach
							</div>
						</div>
					</div>
					@endsection
