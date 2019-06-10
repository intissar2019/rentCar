<div class="container">
					<div class="row">
						<div class="col-lg-2 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Quick links</h6>
								<ul>
						  <li ><a href="{{ route('home') }}">Home</a></li>
				          <li><a href="{{ route('about') }}">About</a></li>
				          <li><a href="{{ route('showContact') }}">Contact</a></li>
				          <li><a href="{{ route('showCarsList') }}">Cars</a></li>
				          <li><a href="{{ route('service') }}">Service</a></li>
				           @if(!Auth::user())
				          <li><a href="{{ route('showAddUser') }}">Register</a></li>
				          @endif
								</ul>								
							</div>
						</div>
						
																	
						<div class="col-lg-2 col-md-6 col-sm-6 social-widget">
							<div class="single-footer-widget">
								<h6>Follow Us</h6>
								<p>Let us be social</p>
								<div class="footer-social d-flex align-items-center">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-dribbble"></i></a>
									<a href="#"><i class="fa fa-behance"></i></a>
								</div>
							</div>
						</div>	
					
						<p class="mt-50 mx-auto footer-text col-lg-12">
							Copyright <script>document.write(new Date().getFullYear()+'/'new Date().getFullYear());</script> All rights reserved | This site is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="">Intissar Klach</a></p>						
						
																	
				
				</div>