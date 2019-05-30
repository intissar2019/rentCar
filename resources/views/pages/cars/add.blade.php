

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
							<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="cars.html"> Cars</a><span class="lnr lnr-arrow-right"></span> <a href="cars.html"> Add</a></p>
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->
					

<div class="container m-4 ">
	<div class="row">
		<div class="col-lg-6 col-md-6 col-12">
	<form class="form-group " id="myForm" action="{{route('handleAddCar')}}" method="post"  enctype="multipart/form-data">
	
				{{ csrf_field() }}

		
				
				<select class="nice-select"  name="mark">
					 @foreach($marks as $mark)
					<option value="{{$mark->id}}">{{$mark->name}}</option>
					@endforeach
				</select>
				
				<input class="form-control txt-field" name="model" placeholder="Enter car model" type="text"><br>
				<label class="txt-field">number of places:</label>

				<select class="nice-select"  name="people">
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
				</select><br>
					<label class="txt-field">number of doors:</label>
			<select class="nice-select"  name="doors">
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
				</select>
				<input class="form-control txt-field" name="mileage" placeholder="Enter carmileage" type="text"><br>
				<input class="form-control txt-field" name="price" placeholder="Enter price/day" type="text"><br>
					<label class="txt-field">type of transmission:</label>
				<select class="nice-select" name="transmission">
					<option value="Automatic">Automatic</option>
					<option value="Manual">Manual</option>
				</select ><br>
				<input class="form-control txt-field"  name="photo" placeholder="Enter car picture" type="file"><br>
															
				<button  type="submit" class="primary-btn mt-20 text-dark" >Add Car</button>
			</form>
			</div>	
			<div class="col-lg-6 col-md-6 col-12">
				<img class="img-fluid" src="{{asset('img/b4.jpg')}}" alt="">
			</div>
		</div>
	</div>

			@endsection