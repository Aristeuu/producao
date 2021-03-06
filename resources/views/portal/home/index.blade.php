@extends('layouts.app')
@section('social')
@include('layouts.social')
@endsection
@section('corpo')
@include('layouts.menuf')
<!-- Start Slider -->


<div class="banner-carousel">
<div id="transition-timer-carousel banner-carousel" class="carousel slide transition-timer-carousel" data-ride="carousel">
  
		<div class="carousel-inner">
        @php
        $p="active"
        @endphp
      @foreach($listaBanner as $lista)

       <div class="item {{$p}}">
      
          <div class="container">
          <div class="row"  style="margin-top:12rem;">
          
          
          <div class="col-sm-4 col-md-4">
        
            <img src="http://localhost/yetoafrica/storage/app/public/{{$lista->banner_img}}" />
            </div>
      

            <div class="col-sm-8 col-md-8" style="margin-top:27rem;">

   
            <div class="carousel-caption">
             <h1>{{$lista->banner_titulo}}</h1>
             <p class="carousel-caption-text hidden-sm hidden-xs">
                        {!! strip_tags($lista->banner_descricao,'<h1><h2><h3><h4><h5><h6><b><strong><i><em><a[href|title]><ul><ol><li><p[style]><br><span><img[width|height|alt|src]>') !!}
                       </p>

                       <div style="margin-top:5rem">
                        <a href="/cursonegocio">Cursos</a>
                       <a href="/cursonegocio">Registrar</a>
                        </div>
            </div>
             </div>
            
      



          </div>



          </div>
              

      </div> 
         
                   
                
                @php
        $p=""
        @endphp
        @endforeach        

	
            
            <!-- Timer "progress bar" -->
            
		</div>
		</div>
    
    </div>
     


    

 
  
 <!-- The carousel -->
 





  <!-- End Slider --> 

  <!-- Start about us -->
  <section id="mu-about-us">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-about-us-area">           
            <div class="row">
              <div class="col-lg-6 col-md-6">
                <div class="mu-about-us-left">
                  <!-- Start Title -->
                  <div class="mu-title ">
                    <h2>Na <strong>yeto??frica</strong> voc?? Ensina Aprende e Soluciona</h2>              
                  </div>
                  <!-- End Title -->
          <div class="text-justify text-sobre">
                <p>{!! strip_tags($listaSobre[0]->sobre_descricao,'<h1><h2><h3><h4><h5><h6><b><strong><i><em><a[href|title]><ul><ol><li><p><br><span><img[width|height|alt|src]>') !!}</p>
                </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6">
                <div class="mu-about-us-right">                            
                <a id="mu-abtus-video" href="{{$listaSobre[0]->sobre_video}}" target="mutube-video">
                  <img src="http://yetoafrica.com/public/oficial/assets/img/{{$listaSobre[0]->sobre_img}}" alt="img">
                </a>                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End about us -->

  <!-- Start about us counter -->
  <section id="mu-abtus-counter">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-abtus-counter-area">
            <div class="row">
              <!-- Start counter item -->
              <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="mu-abtus-counter-single">
                  <span class="fa fa-graduation-cap"></span>
                  <h4 class="counter">5</h4>
                  <p>Academias</p>
                </div>
              </div>
              <!-- End counter item -->
              <!-- Start counter item -->
              <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="mu-abtus-counter-single">
                  <span class="fa fa-users"></span>
                  <h4 class="counter">{{$contAluno}}</h4>
                  <p>Estudantes</p>
                </div>
              </div>
              <!-- End counter item -->
              <!-- Start counter item -->
              <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="mu-abtus-counter-single">
                  <span class="fa fa-book"></span>
                  <h4 class="counter">{{$contCursos}}</h4>
                  <p>Cursos</p>
                </div>
              </div>
              <!-- End counter item -->
              <!-- Start counter item -->
              <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="mu-abtus-counter-single no-border">
                  <span class="fa fa-user"></span>
                  <h4 class="counter">{{$contFormador}}</h4>
                  <p>Formadores</p>
                </div>
              </div>
              <!-- End counter item -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End about us counter -->

  <!-- Start features section -->
  <section id="mu-features">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="mu-features-area">
          
            <div class="mu-title">
              <h2>SERVI??OS</h2>
            </div>
          
            <div class="mu-features-content">
              <div class="row">
           @foreach($listaServicos as $lista)

                <center>
                <div class="col-lg-3 col-md-4  col-sm-6">
                  <div class="mu-single-feature">
                    <span class="{{$lista->serv_icone}}"></span>
                    <h4>{{$lista->serv_nome}}</h4>
                    {!!$lista->serv_descricao!!}
                   
                  </div>
                </div>
              </center>
           @endforeach
              </div>
            </div>
       
          
          </div>
        </div>
      </div>
    </div>
  </section>
       
  <!-- End features section -->

  <!-- Start latest course section -->
  <section id="mu-latest-courses">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="mu-latest-courses-area">
            <!-- Start Title -->
            <div class="mu-title">
              <h2>NOSSOS CURSOS</h2>
              <p>Os melhores cursos profissionais encontras aqui na yetoafrica</p>
            </div>
            <!-- End Title -->
            <!-- Start latest course content -->
            <div id="mu-latest-course-slide" class="mu-latest-courses-content">
        @foreach($listaCurso as $lista) 
        @if(isset($listaPedido))
        @php 
        $cont="";
        @endphp
        @foreach($listaPedido as $pedido)
        @if($pedido->curso_id==$lista->id)
        @php 
        $cont="{$pedido->status}";
        @endphp
        @endif
        @endforeach
        @endif
        <div class="col-md-4 col-sm-6">
                  <div class="col-item">
                                <div class="photo inner">
                                <a href="/detalhes/{{base64_encode($lista->id)}}"> 
                                  <img src="http://localhost/yetoafrica/storage/app/public/{{$lista->curso_img}}" style="	max-width: 100%;	width: 360px; height: 260px; object-fit: cover;" alt="a" /></a>
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-6">
                                            <h5>
                                            {{$lista->curso_nome}}</h5>
                                            <h5 class="price-text-color">
                                            {{ number_format($lista->curso_preco, 2, ',', '.') }} AKZ</h5>
                                        </div>
                                        <div class="rating hidden-sm col-md-6">
                                            <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="separator clear-left">
    @if(isset($cont))
      @if($cont=="")          

          
        @else 
              @if($cont=="PA")
                <p class="btn-details">
                <a href="/cursoestudante/{{base64_encode($lista->id)}}" class="btn col-12 btn-primary px-4 py-3 mt-3"> <i class="fa fa-eye"></i>Aceder</a></p>
              @endif 
              @if($cont=="PE")
                <p class="btn-details">
                <a href="/aulaestudante/{{$lista->id}}" class="btn col-12 btn-primary px-4 py-3 mt-3"> <i class="fa fa-eye"></i>Aceder</a></p>
              @endif                                           
      @endif
    @endif  
      <p class="btn-details">
        <a href="/detalhes/{{base64_encode($lista->id)}}" class="btn col-12 btn-primary px-4 py-3 mt-3"> <i class="fa fa-eye"></i> Descri????o</a></p> 

                                      
  </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
                                </div>
                    </div>     
        @endforeach
            <!-- End latest course content -->
          </div>
        </div>
      </div>
    </div>
  </section>
  
  
  <!-- Start from blog -->
  <section id="mu-from-blog">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-from-blog-area">
            <!-- start title -->
            <div class="mu-title">
              <h2>Blog</h2>
              <p>Todas as novidades sobre a nossa plataforma de cursos online!!!</p>
            </div>
            <!-- end title -->  
            <!-- start from blog content   -->
            <div class="mu-from-blog-content">
              <div class="row">
                  @php
                  $cont=0;
                   @endphp
                  @foreach($listaBlog as $lista)
                 @if($cont<3)
                <div class="col-md-4 col-sm-4">
                  <article class="mu-blog-single-item">
                    <figure class="mu-blog-single-img">
                      <a href="/blogfront/{{base64_encode($lista->id)}}">
                        <img src="http://yetoafrica.com/storage/app/public/{{$lista->blog_foto}}" style="	max-width: 100%;	width: 360px; height: 260px; object-fit: cover;" ></a>
                      <figcaption class="mu-blog-caption">
                        <h3><a href="/blogfront/{{base64_encode($lista->id)}}" style="color: #0c9da0">{{$lista->blog_titulo}}</a></h3>
                      </figcaption>                      
                    </figure>
                    <div class="mu-blog-meta">
                      <a href="/blogfront/{{base64_encode($lista->id)}}" style="color: grey">
                      <a href="/blogfront/{{base64_encode($lista->id)}}">02 June 2016</a>
                      
                    </div>
                    <div class="mu-blog-description">
                    {!! strip_tags($lista->blog_descricao,'<h1><h2><h3><h4><h5><h6><b><strong><i><em><a[href|title]><ul><ol><li><p[style]><br><span><img[width|height|alt|src]>') !!}
                    </div>
                    
                
                    <div class="mu-latest-course-single-contbottom">
                    <a class="btn blog-btn" href="/blogfront/{{base64_encode($lista->id)}}">Ver</a>
                    </div>
                  </article>
                </div>
                
                @php
                  $cont=$cont+1;
              @endphp
              @endif
              @endforeach    
            <!-- end from blog content   -->   
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End from blog -->

  

@endsection

