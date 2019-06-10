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
							<a href="{{route('home')}}" class="primary-btn text-uppercase">Rent Car Now</a>
						</div>
						<div class="col-lg-4  col-md-6 header-right">
							<h4 class="text-white pb-30">
								@if(Session::has('msg'))
 								<span class="text-danger">{{session('msg')}}</span>
 								{{session::forget('msg')}}
							   @else  Book Your Car Today! 
							    @endif</h4>
							
							<form class="form" role="form" method="post" action="{{route('handleUserLogin')}}">
								{{ csrf_field() }}
							  				   
							   <div class="from-group" >
							    <input class="form-control txt-field" type="email" name="email" placeholder="Email address">
							    <input class="form-control txt-field" type="password" name="password" placeholder="Password">
							    </div>
							    <div class="form-group row">
							        <div class="col-md-12">
							            <button type="submit" class="btn btn-default btn-lg btn-block text-center text-uppercase">Login</button>
							        </div>
							    </div>
							</form>
						</div>											
					</div>
				</div>					
			</section>