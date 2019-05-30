<div class="container">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href=""><img src="img/logo.png" alt="" title="" /></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li class="menu-active"><a href="">Home</a></li>
				          <li><a href="#about">About</a></li>
				          <li><a href="{{ route('showCarsList') }}">Cars</a></li>
				          <li><a href="#service">Service</a></li>
				          <li><a href="blog-home.html">Register</a></li>
				          <li><a href="blog-home.html">Login</a></li>
				          @auth	
				          <li><a href="contact.html">Dashboard</a>
				            <ul>
				              <li><a href="{{ route('handleAddCar') }}">Add car</a></li>
				              <li><a href="elements.html">Check Booking</a></li>
				              <li><a href="elements.html">My Booking(s)</a></li>
				            </ul>
				          </li>	
				          @endauth		          
				        </ul>
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
