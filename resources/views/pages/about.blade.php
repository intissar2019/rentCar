
@extends('layouts.default')
@section('content')
<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								About Us			
							</h1>	
							<p class="text-white link-nav"><a href="{{route('home')}}">Home</a><span class="lnr lnr-arrow-right"></span><a href="{{route('about')}}">About us</p>
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->
<!-- Start home-about Area -->
			<section class="home-about-area" id="about">
				<div class="container-fluid p-4 m-4">				
					<div class="row justify-content-center align-items-center">
						
						<div class="col-lg-6 no-padding home-about-right">
							<h1>Globally Connected <br>
							by Large Network</h1>
							<p>
								<span>We are here to listen from you deliver exellence</span>
							</p>
							<p class="text-dark">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
								Ut enim ad minim. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.
							</p>
							<p class="text-dark">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							
							</p>
							<a class="text-uppercase primary-btn" href="#">get details</a>
						</div>
						<div class="col-lg-6 no-padding home-about-left">
							<img class="img-fluid" src="{{asset('img/header1.jpg')}}" alt="">
						</div>
					</div>
				</div>	
			</section>
			
			@endsection