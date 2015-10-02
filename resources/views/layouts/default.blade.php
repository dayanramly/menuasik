<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    @include('includes.head')
    @yield('css')
</head>
<body>
	<header>
		<!-- header here -->
       @include('includes.header')
   </header>

   <div class="container-fluid">
       <div class="row">
           <!-- main content here -->
           @yield('content')
       </div>
   </div>

   <footer>
       <!-- footer here -->
       @include('includes.footer')
       @yield('js')
   </footer>
</body>
</html>