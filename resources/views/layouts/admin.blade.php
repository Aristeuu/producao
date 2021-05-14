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

		<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
		<link href="<?=REQUIRE_PATH?>/css/lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
		<link href="<?=REQUIRE_PATH?>/css/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
		<link href="<?=REQUIRE_PATH?>/css/lib/rickshaw/rickshaw.min.css" rel="stylesheet">
		<link href="<?=REQUIRE_PATH?>/css/lib/select2/css/select2.min.css" rel="stylesheet">
	
		<link rel="stylesheet" type="text/css" href="<?=REQUIRE_PATH?>/css/bracket.css">
		<link rel="stylesheet" type="text/css" href="<?=REQUIRE_PATH?>/css/newstyle.css">	

		<!-- Styles -->
		
		
	

		
	

<!-- Google Tag Manager -->
<script type="application/javascript">
(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
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
	
 
    
   
    
	<script src="<?=SCRIPT?>/js/app.js"></script>

	   <script script  src="//cdn.ckeditor.com/4.6.2/full/ckeditor.js"> </script>  
	<script src="{{ asset('/js/jquery.min.js') }}"></script>
	<script src="{{ asset('/js/datepicker.js') }}"></script>
	<script src="{{ asset('/js/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset('/js/perfect-scrollbar.min.js') }}"></script>
	<script src="{{ asset('/js/moment.min.js') }}"></script>
	<script src="{{ asset('/js/highlight.pack.min.js') }}"></script>
	<script src="{{ asset('/js/jquery.peity.min.js') }}"></script>
	<script src="{{ asset('/js/bracket.js') }}"></script>
	<script src="{{ asset('/js/tooltip-colored.js') }}"></script>
	<script src="{{ asset('/js/popover-colored.js') }}"></script>
	
	
	<script>

		function Eliminar(id)
		{
		 
		  window.location.href="/delete/"+id;
		}  
	  
	  </script>
	  
	  
	  <script>
		$(document).ready(function(){   
		  $("#isChecked").change(function(){      
			  if($(this).prop('checked')){
				  $('#formador').show();
				  $('#percentagem').show();  
						   
			  }
			  else
			  {
				$('#formador').hide();
				$("#percentagem").hide();
			   
			  }
		  });
	  
		});
	  </script>
	  <script type="text/javascript">


		'use strict'
		  
		  const currentLocation = location.href;
		  const menuItem        = document.querySelectorAll('a');
		  const menuLength      = menuItem.length;
		  for( let i = 0; i<menuLength; i++)
			  if(menuItem[i].href ===currentLocation)
			  {
				menuItem[i].className = "nav-link active";
			  }
		
		</script>
		<script>
			$(document).ready(function(){
				/* by default hide all radio_content div elements except first element */
				$(".content .radio_content").hide();
				$(".content .radio_content:first-child").show();
	
				/* when any radio element is clicked, Get the attribute value of that clicked radio element and show the radio_content div element which matches the attribute value and hide the remaining tab content div elements */
				$(".radio_wrap").click(function(){
				  var current_raido = $(this).attr("data-radio");
				  $(".content .radio_content").hide();
				  $("."+current_raido).show();
				});			


			});
		</script>
	
    
</body>


</html>
