@php

define('HOME', 'http://localhost:8000');
define('THEME', 'assets');

define('INCLUDE_PATH', HOME . '/oficial/' . THEME);
define('REQUIRE_PATH', '/oficial/' . THEME);




@endphp

<!DOCTYPE html>
<html lang="pt-br" itemscope itemtype="https://schema.org/Article">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Yetoafrica</title>
     @yield('seo')
    <!-- Favicon -->
   <!-- Favicon -->
   <link rel="shortcut icon" href="<?=REQUIRE_PATH?>/img/fiveicon13.png" type="image/x-icon">

   <!-- Font awesome -->
   <link href="<?=REQUIRE_PATH?>/css/font-awesome.css" rel="stylesheet">
   <link rel="stylesheet" href="<?=REQUIRE_PATH?>/aos.css">
   <!-- Bootstrap -->
   <link href="<?=REQUIRE_PATH?>/css/bootstrap.css" rel="stylesheet">   
   <!-- Slick slider -->
   <link rel="stylesheet" type="text/css" href="<?=REQUIRE_PATH?>/css/slick.css">          
   <!-- Fancybox slider -->
   <link rel="stylesheet" href="<?=REQUIRE_PATH?>/css/jquery.fancybox.css" type="text/css" media="screen" /> 
   <!-- Theme color -->
   <link id="switcher" href="<?=REQUIRE_PATH?>/css/theme-color/default-theme.css" rel="stylesheet">          

   <!-- Main style sheet -->
   <link href="<?=REQUIRE_PATH?>/css/style.css" rel="stylesheet">    
<!-- CSS personalizado -->
<link rel="stylesheet" href="<?=REQUIRE_PATH?>/bracket.css">
<link rel="stylesheet" href="<?=REQUIRE_PATH?>/personalizado.css">
<link rel="stylesheet" href="<?=REQUIRE_PATH?>/banner.css">
<link rel="stylesheet" href="<?=REQUIRE_PATH?>/font.css">
  
   <!-- Google Fonts -->
   <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;1,900&display=swap" rel="stylesheet">
   
  </head>
  <body> 

  @yield('social')
 
  

  <!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
      <i class="fa fa-angle-up"></i>      
    </a>
  <!-- END SCROLL TOP BUTTON -->
 
  <div>
    <!--CONTEUDO-->
   

   <!--CONTEUDO-->

  @yield('corpo')

  </div>
  <!-- Start footer -->
  
  <!-- End footer -->
  <script src="{{ asset('js/app.js') }}"></script>
  <!-- jQuery library -->
  <script src="<?=REQUIRE_PATH?>/js/jquery.min.js"></script> 
  
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="<?=REQUIRE_PATH?>/js/bootstrap.js"></script>   
  <!-- Slick slider -->
  <script type="text/javascript" src="<?=REQUIRE_PATH?>/js/slick.js"></script>
  <!-- Counter -->
  <script type="text/javascript" src="<?=REQUIRE_PATH?>/js/waypoints.js"></script>
  <script type="text/javascript" src="<?=REQUIRE_PATH?>/js/jquery.counterup.js"></script>  
  <!-- Mixit slider -->
  <script type="text/javascript" src="<?=REQUIRE_PATH?>/js/jquery.mixitup.js"></script>
  <!-- Add fancyBox -->        
  <script type="text/javascript" src="<?=REQUIRE_PATH?>/js/jquery.fancybox.pack.js"></script>
  <!-- Custom js -->
  <script src="<?=REQUIRE_PATH?>/js/custom.js"></script> 
  
  </body>
</html>