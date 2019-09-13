@extends('layouts.default')
@section('content')
<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Users			
							</h1>	
							<p class="text-white link-nav"><a href="{{route('home')}}">Home </a>  <span class="lnr lnr-arrow-right"></span> Users<span class="lnr lnr-arrow-right"></span> <a href="{{route('showAddUser')}}"> Register</a></p>
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->

	<div class="container">
	<div class="row d-flex justify-content-center pb-40">
						<div class="col-md-8 pb-40 header-text">
							<h1 class="text-center pb-10">Sign up for a Free Account - rentCar</h1>
							
						</div>
					</div>	
			<form class="form-area " id="myForm" action="{{route('handleAddUser')}}" method="post" class="contact-form text-right">
							
				{{ csrf_field() }}
	<div class="row">	
		<div class="col-lg-6 form-group">
			<input name="firstName" placeholder="Enter your first name"  class="common-input mb-20 form-control" required="" type="text">
			<input name="lastName" placeholder="Enter your last name"  class="common-input mb-20 form-control" required="" type="text">
									
			<input name="email" placeholder="Enter email address"  class="common-input mb-20 form-control" required="" type="email">
			<input name="password" placeholder="Enter your password" class="common-input mb-20 form-control" required="" type="password">
			<div class="mt-20 alert-msg" style="text-align: left;"></div>

			<input name="phone" placeholder="Enter your phone" class="common-input mb-20 form-control" required="" type="text">
			<div class="mt-20 alert-msg" style="text-align: left;"></div>
		</div>
		<div class="col-lg-6 form-group">
		<textarea class="common-textarea form-control" name="address" placeholder="address" required=""></textarea>
		<button class="primary-btn mt-20 text-dark" style="float: right;" type="submit">Sign up</button>
																				
	</div>
</div>
</form>	
</div>
	@endsection