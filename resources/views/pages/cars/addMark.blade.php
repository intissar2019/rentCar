@extends('layouts.default')
@section('content')
	<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Marks			
							</h1>	
							<p class="text-white link-nav"><a href="{{route('home')}}">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href=""> Marks</a><span class="lnr lnr-arrow-right"></span> <a href="{{route('showAddMark')}}"> Add</a></p>
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->
			<div class="container">
				<div class="row">
					<div class="col-lg-6 mt-4 container">
						<form class="form-group "  action="{{route('handleAddMark')}}" method="post"  >

							{{ csrf_field() }}

							<input class="form-control txt-field" name="name" placeholder="Enter car mark" type="text"><br>				
							<button  type="submit" class="primary-btn mt-20 text-dark" >Add Mark</button>
						</form>
					</div>
					<div class="col-lg-6 model-right">
						<img class="img-fluid" src="{{asset('img/Car-Logos.jpg')}}" alt="brand">
					</div>
			</div>
		</div>
			@endsection