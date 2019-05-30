<!doctype html>
<html>
<head>
   @include('includes.head')
</head>
<body>

   <header id="header" >
       @include('includes.header')
   </header>
  
           @yield('content')
 <footer class="footer-area section-gap">
       @include('includes.footer')
   </footer>
  @include('includes.footer-scripts')
</body>
</html>