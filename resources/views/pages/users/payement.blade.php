
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
                            <p class="text-white link-nav"><a href="{{route('home')}}">Home </a>   <span class="lnr lnr-arrow-right"></span><a href="{{route('showBookingsList')}}">Your Bookings</a><span class="lnr lnr-arrow-right"></span>Payment</p>
                        </div>                                          
                    </div>
                </div>
            </section>
<div class="container pt-11 pb-11 mt-100 mb-100">
        <div class="row">
            <div class="col-12 col-lg-6 ml-auto mr-auto">
                <div class="text-center">
                    <h3 class="font-weight-light mb-3 d-lg-none">
                        <span class="font-supersized">Easy and Secure</span>
                    </h3>
                    <h1 class="font-weight-light mb-3 d-none d-lg-block">
                        <span class="font-supersized">Easy and Secure</span>
                    </h1>
                    <p>
                        We take special care to make sure the booking experience with <span class="font-weight-bold">America Car Rental</span> is always simple, fast and 100% secure.
                    </p>
                    <img class="img-fluid" src="https://www.americacarrental.com/images/credit_card_logos_grayscale.png">
                </div>
            </div>
        </div>
    </div>
    @endsection