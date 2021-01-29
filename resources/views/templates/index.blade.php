<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html lang="en">

 <head>
   @include('templates.partials._head')
 </head>

<body>

 <header class="navbar navbar-inverse navbar-fixed-top" role="banner">
   @include('templates.partials._header')
 </header><!--/header-->

 @include('templates.partials._slider')

		<!-- Our Portfolio -->
 @include('templates.partials._portfolio')
		<!-- Our Portfolio -->
<hr>
    <!-- Our Articles + latest news-->
   @include('templates.partials._blog')
    <!-- Our Articles + latest news-->

	 @include('templates.partials._footer')

   @include('templates.partials._scripts')

    </body>
</html>
