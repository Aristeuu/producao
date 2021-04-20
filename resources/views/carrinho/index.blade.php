@php

define('HOME', 'http://yetoafrica.com');
define('THEME', 'carrinho');

define('INCLUDE_PATH', HOME . '/public/');
define('REQUIRE_PATH', '/public/' . THEME);

@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Yetoafrica</title>
    <link href="<?=REQUIRE_PATH?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=REQUIRE_PATH?>/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?=REQUIRE_PATH?>/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?=REQUIRE_PATH?>/css/price-range.css" rel="stylesheet">
    <link href="<?=REQUIRE_PATH?>/css/animate.css" rel="stylesheet">
	<link href="<?=REQUIRE_PATH?>/css/main.css" rel="stylesheet">
	<link href="<?=REQUIRE_PATH?>/css/responsive.css" rel="stylesheet">
    <link href="<?=REQUIRE_PATH?>/css/carinhocss.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head><!--/head-->
 

<body>



  <!-- Start menu -->
  <section id="mu-menu">
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">  
      <div class="container">
         
              <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- LOGO -->              
          <!-- TEXT BASED LOGO -->
          <a class="navbar-brand" href="/"><img src="<?=INCLUDE_PATH?>/oficial/assets/img/esse.png" alt=""></a>
          <!-- IMG BASED LOGO  -->
          <!-- <a class="navbar-brand" href="index.html"><img src="assets/img/logo.png" alt="logo"></a> -->
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
            <li class="{{ isset($home) ? 'active' : '' }}"><a href="/">HOME</a></li>                      
            <li class="{{ isset($curso) ? 'active' : '' }}"><a href="/cursonegocio">CURSOS</a></li>
            <li class="{{ isset($formador) ? 'active' : '' }}"><a href="/formadores">FORMADORES</a></li>
            <li class="{{ isset($blog) ? 'active' : '' }}">
              <a href="/blogfront">BLOG</a>
            </li>            
            <li class="{{ isset($contacto) ? 'active' : '' }}"><a href="/contacto">CONTACTOS</a></li>
            @if(isset(auth()->user()->name))
            <li><a href="{{route('admin')}}">MINHA CONTA</a></li>  
            @else
            <li><a href="{{route('admin.login')}}">FAZER LOGIN</a></li>  
           @endif
          </ul>                     
        </div><!--/.nav-collapse -->        
      </div>     
    </nav>
  </section>
  <!-- End menu -->

  <section class="banner-carrinho">
   <div class="textocarrinh jumbotron">
   <h2 data-purpose="shopping-cart-title" class="text-white">Carrinho de Compras</h2>
   </div>
  </section>

	<div class="container">
	       @forelse ($pedidos as $pedido)
	       
	               
            <table>      
            
                <thead></thead>
                
                <tbody>
                      @php
                        $total_pedido = 0;
                    @endphp
                    @foreach ($pedido->pedido_cursos as $pedido_curso)
	                <tr>
	<div class="row row-sm mg-t-20 carrinho-compra">
          <div class="col-xl-9">
            <div class="card bd-0 pd-0 shadow-base">
              <div class="row no-gutters">
                <div class="col-md-12 col-lg-4 pd-20-force">
                  <img src="http://producao.yetoafrica.com/storage/app/public/{{$pedido_curso->curso->curso_img}}" class="img-fluid wd-md-100p wd-lg-auto" alt="">
                </div><!-- col-4 -->
                <div class="col-md-6 col-lg-5 pd-20-force bg-gray-100">
                  <div>
                    <span class="tx-warning d-inline-block">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="icon ion-star"></i>
                      <i class="icon ion-star"></i>
                      <i class="icon ion-star tx-gray-500"></i>
                    </span>
                    <span class="tx-12"> &nbsp; <span class="tx-rubik">4 </span> Stars</span>
                  </div>
                  <h5 class="tx-normal mg-y-5"><a class="tx-inverse">{{ $pedido_curso->curso->curso_nome }}</a></h5>
                  <span class="tx-13"></span>

                  <p class="tx-13 mg-t-20">{{ $pedido_curso->curso->curso_descricao }}</p>
                </div><!-- col-5 -->
                <div class="col-md-6 col-lg-3 pd-20-force d-flex align-items-start flex-column">
                  <h5 class="tx-normal mg-b-0">AKZ <span class="tx-danger tx-medium tx-lato">{{ number_format($pedido_curso->curso->curso_preco, 2, ',', '.') }}</span></h5>
                  
                            @php
                            $total_produto = $pedido_curso->valores;
                            $total_pedido += $total_produto;
                            @endphp
                 
                    
                   
                    <form action="{{route('carrinho.remover')}}" method="" enctype="multipart/form-data" token="{{ csrf_token() }}">
                      <input type="hidden" name="pedido_id" value="{{$pedido->id}}">
                      <input type="hidden" name="curso_id" value="{{$pedido_curso->curso->id}}">
                      <input type="hidden" name="item" value="{{$pedido->id}}">
                      <button class="btn btn-danger btn-block tx-size-sm" name="item">Remover</i></button>
                    </form>
                    
                  </tr>
                  
                   @endforeach
                  </tbody>
				
				
				
                </table>
                  <form method="POST" action="{{ route('carrinho.concluir') }}">
                    {{ csrf_field() }}
                    <input type="hidden" name="pedido_id" value="{{ $pedido->id }}">
                   
                    <button class="btn btn-primary btn-block tx-size-sm" type="submit">Finalizar compra</button>   
                </form>
                  
                </div><!-- col-3-->
              </div><!-- row -->
            </div><!-- card -->
            </div>
               </div>
                @empty
            <h5>Não há nenhum pedido no carrinho</h5>
                 @endforelse 
                </div>
               

    

	<footer id="mu-footer">
    <!-- start footer top -->
    <div class="mu-footer-top">
      <div class="container">
        <div class="mu-footer-top-area">
          <div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                <h4>A Sua plataforma</h4>
                <ul>
                  <li><a href="<?=HOME?>/cursonegocio">Cursos</a></li>
                  <li><a href="<?=HOME?>/formadores">Formadores</a></li>
                  <li><a href="<?=HOME?>/contacto">Fala Connosco</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                <h4>Nosso Conteúdo</h4>
                <ul>
                  <li><a href="<?= HOME ?>/blogfront">Blog</a></li>
                  <li><a href="<?=HOME?>/perguntas">Perguntas</a></li>
                                   
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                <h4>Newsletter</h4>
                @if(Session::get('sms'))
                  <p class="btn-success">{{Session::get('sms')}}</p>

                  @else
                  <p>Deixa o seu email para estar actualizado</p>
                @endif
             
                <form action="{{route('newslater.store')}}" class="mu-subscribe-form" method="post">
                {{ csrf_field() }}
                @if($errors->all())
       @foreach($errors->all() as $key=>$value)
        <p class="btn-danger">{{$value}}</p>
        @endforeach
        @endif
                  <input type="email" name="email" placeholder="Teu email">
                  <button class="mu-subscribe-btn" type="submit">Inscreva-se!</button>
                </form>               
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                <h4>Contactos
                </h4>
                <address>
                  <p>C20, Kilamba, Luanda, Angola</p>
                  <p>Telefone: 	+244 222 719 987 </p>
                  <p>Email: contacto@yetoafrica.com</p>
                </address>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end footer top -->
    <!-- start footer bottom -->
    <div class="mu-footer-bottom">
      <div class="container">
        <div class="mu-footer-bottom-area">
          <p class="text-center textreser">&copy; Todos os direitos reservados a Yetoafrica</p>
        </div>
      </div>
    </div>
    <!-- end footer bottom -->
  </footer>


    <script src="<?=REQUIRE_PATH?>/js/jquery.js"></script>
	<script src="<?=REQUIRE_PATH?>/js/bootstrap.min.js"></script>
	<script src="<?=REQUIRE_PATH?>/js/jquery.scrollUp.min.js"></script>
    <script src="<?=REQUIRE_PATH?>/js/jquery.prettyPhoto.js"></script>
    <script src="<?=REQUIRE_PATH?>/js/main.js"></script>
</body>
</html>