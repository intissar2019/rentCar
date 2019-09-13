<div class="container">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="{{ route('about') }}"><img src="{{asset('img/logo.png')}}" alt="" title="" /></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li class="menu-active"><a href="{{ route('home') }}">Home</a></li>
				          <li><a href="{{ route('about') }}">About</a></li>
				          <li><a href="{{route('showCarsList')}}">Cars</a></li>
				          <li><a href="{{ route('service')}}">Service</a></li>
				           <li><a href="{{ route('showContact')}}">contact</a></li>
				          @if(!Auth::user())
				          <li><a href="{{ route('showAddUser') }}">Register</a></li>
				          <li><a href="{{ route('showUserLogin') }}">Login</a></li>
				          @endif
				          @auth	
				          
				          <li><a href="">Dashboard</a>
				            <ul>
				              @if((Auth::user()->role_id)==1)
				              <li><a href="{{ route('showAddCar') }}">Add car</a></li>
				               <li><a href="{{ route('showAddMark') }}">Add brand</a></li>
				               <li><a href="{{ route('showDeleteCar') }}">Remove a Car</a></li>
				              <li><a href="{{ route('showCheckBooking') }}">Check Bookings</a></li>
				              <li><a href="{{ route('showHistoryBooking') }}"> History</a></li>
				              @else
				              <li><a href="{{ route('showUpdateUser') }}">Update my account</a></li>
				              <li><a href="{{ route('showBookingsList') }}">My booking(s)</a></li>
				              @endif
				            </ul>
				          </li>
				          <li><a class="primary-btn pt-0 pb-0" href="{{ route('handleUserLogout') }}">Logout:{{Auth::user()->firstName}}</a></li>	
				          @endauth		          
				        </ul>
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
