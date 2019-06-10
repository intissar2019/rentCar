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
							<p class="text-white link-nav"><a href="{{route('home')}}">Home </a>  <span class="lnr lnr-arrow-right"></span>Users<span class="lnr lnr-arrow-right"></span> <a href="{{route('showUpdateUser')}}"> Update</a></p>
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->

<div class="container">
	<div class="row d-flex justify-content-center pb-40">
						<div class="col-md-8 pb-40 header-text">
							<h2 class="text-center pb-10">Update account:
							{{Auth::user()->firstName}} {{Auth::user()->lastName}}</h2>
							<h3 class="text-center text-dark">Created  :{{Auth::user()->created_at->diffForHumans(now())}}</h3>
						</div>
					</div>	
<form class="form-area " id="myForm" action="{{route('handleUpdateUser')}}" method="post" class="contact-form text-right">
	{{ csrf_field() }}
	@if ($errors->any())
   								<div class="alert text-danger">
       								<ul>
           						@foreach ($errors->all() as $error)
              					 <li>{{ $error }}</li>
          						 @endforeach
          						</ul>
          					</div>
          					@endif
	<div class="row">	
		<div class="col-lg-6 form-group">
		<div class="row d-flex">					
			<p class="col-lg-4">Enter your new mail:</p><input name="email"  class="common-input mb-20 form-control col-lg-8" required="" type="email" value="{{Auth::user()->email}}">
		</div>
		<div class="row d-flex">					
			<p class="col-lg-4">Enter your new phone:</p><input name="phone"  class="common-input mb-20 form-control col-lg-8" required="" type="text" value="{{Auth::user()->phone}}">
		</div>
		<div class="row d-flex">					
			<p class="col-lg-4">Enter your new password:</p><input name="password"  class="common-input mb-20 form-control col-lg-8" required="" type="password">
		</div>
			
		</div>
		<div class="col-lg-6 form-group">
		<textarea class="common-textarea form-control" name="address" placeholder="your new address" required="" rows="6">{{Auth::user()->address}}</textarea>
		<button class="primary-btn mt-20 text-dark" style="float: right;" type="submit">Update</button>
																				
	</div>
</div>
</form>	
</div>
	@endsection