@php

define('HOME', 'http://localhost:8000');
define('THEME', 'estilos');

define('INCLUDE_PATH', HOME . '/backend/' . THEME);
define('REQUIRE_PATH', '/backend/' . THEME);
define('SCRIPT', 'http://localhost:8000');



 @endphp

<!doctype html>
<html>
	<head>
		<title>Yetoafrica</title>
		<meta charset="utf-8">
		<link rel="shortcut icon" href="<?=INCLUDE_PATH?>/img/foto01.png" type="image/x-icon">
		<meta name="viewport" content="width=device-width, initial-scale=1">				
		<script type="text/javascript" src="<?=REQUIRE_PATH?>/js/js.js"></script>
		<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	    <link rel="stylesheet" type="text/css" href="<?=REQUIRE_PATH?>/css/bracket.css">
		<link rel="stylesheet" type="text/css" href="<?=REQUIRE_PATH?>/css/newstyle.css">

		<!-- Styles -->
		<link href="{{ asset('css/app.css') }}" rel="stylesheet">
		
	

		
	

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-N3SWJ6J');</script>
	<!-- End Google Tag Manager -->
	</head>
<body>
	
        @include('layouts.topo')
	    <div  id="app" style="display:none">
			@yield('content')
			
        </div> 



<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N3SWJ6J"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	
    <script script  src="//cdn.ckeditor.com/4.6.2/full/ckeditor.js"> </script>
  
    
    <script src="<?=REQUIRE_PATH?>/js/jquery.min.js"></script>
    

	
	<script src="{{ asset('/js/datepicker.js') }}"></script>
	<script src="{{ asset('/js/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset('/js/perfect-scrollbar.min.js') }}"></script>
	<script src="{{ asset('/js/moment.min.js') }}"></script>
	<script src="{{ asset('/js/jquery.peity.min.js') }}"></script>
	<script src="{{ asset('/js/d3.min.js') }}"></script>
	<script src="{{ asset('/js/d3.layout.min.js') }}"></script>
	<script src="{{ asset('/js/rickshaw.min.js') }}"></script>
	<script src="{{ asset('/js/jquery.flot.js') }}"></script>
	<script src="{{ asset('/js/jquery.flot.resize.js') }}"></script>
	<script src="{{ asset('/js/jquery.flot.spline.min.js') }}"></script>
	<script src="{{ asset('/js/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('/js/echarts.min.js') }}"></script>
	<script src="{{ asset('/js/select2.full.min.js') }}"></script>
	<script src="http://maps.google.com/maps/api/js?key=AIzaSyAq8o5-8Y5pudbJMJtDFzb8aHiWJufa5fg"></script>
	<script src="<?=SCRIPT?>/js/app.js"></script>
	<script src="{{ asset('/js/bracket.js') }}"></script>
	

	


	<script src="{{ asset('/js/gmaps.min.js') }}"></script>
	<script src="{{ asset('/js/map.shiftworker.js') }}"></script>
	<script src="{{ asset('/js/ResizeSensor.js') }}"></script>
	<script src="{{ asset('/js/dashboard.js') }}"></script>

	


  
	
	
	
</body>


</html>
