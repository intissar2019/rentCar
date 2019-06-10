<!doctype html>
<html lang="{{ app()->getLocale() }}">
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
   @include('sweet::alert')

</body>
</html>