@extends('layouts.menuf')
@extends('layouts.app')
@section('seo') 
<title>{{$listaCurso->curso_nome}}</title>
        <meta name="description" content="{{$listaCurso->curso_descricao}}"/>
        <meta name="robots" content="index, follow"/>
 
        <link rel="author" href="https://plus.google.com/posts"/>
        <link rel="publisher" href="https://plus.google.com/"/>
        <link rel="canonical" href="/cursonegocio/{{ $listaCurso->id }}">
     
        <meta itemprop="name" content="Yetoafrica"/>
        <meta itemprop="description" content="{{$listaCurso->curso_descricao}}"/>
        <meta itemprop="image" content="{{$listaCurso->curso_img}}"/>
        <meta itemprop="url" content="/cursonegocio/{{ $listaCurso->id }}"/>

        <meta property="og:type" content="article" />
        <meta property="og:title" content="{{$listaCurso->curso_nome}}" />
        <meta property="og:description" content="{{$listaCurso->curso_descricao}}" />
        <meta property="og:image" content="{{$listaCurso->curso_img}}" />
        <meta property="og:url" content="/cursonegocio/{{ $listaCurso->id }}" /> 
        <meta property="og:site_name" content="Yetoafrica" />
        <meta property="og:locale" content="pt_BR" />
        <meta property="og:app_id" content="626590460695980" />
        <meta property="article:author" content="https://www.facebook.com/" />
        <meta property="article:publisher" content="https://www.facebook.com/" />

        <meta property="twitter:card" content="summary_large_image" />
        <meta property="twitter:site" content="" />
        <meta property="twitter:domain" content="" />
        <meta property="twitter:title" content="" />
        <meta property="twitter:description" content="" />
        <meta property="twitter:image:src" content="" />
        <meta property="twitter:url" content="" />  
        
        
       
@endsection
@section('corpo')

@php 
        $cont="";
        @endphp
@if(isset($listaPedido))
        @php 
        $cont="";
        @endphp
        @foreach($listaPedido as $pedido)
        @if($pedido->curso_id==$listaCurso->id)
        @php 
        $cont="{$pedido->status}";
        @endphp
        @endif
        @endforeach
@endif
  <!--START SCROLL TOP BUTTON -->
  <a class="scrollToTop" href="#">
    <i class="fa fa-angle-up"></i>      
  </a>
<!-- END SCROLL TOP BUTTON -->


 <div class=" br-profile-page">

      <div class="banner shadow-base bd-0 rounded-0 widget-4">
        
       
                 
    <div class="banner-card">
              
    <div class="row"> 
        <div class="container">

         <div class="col-sm-6 d-flex">
              <h1 class="tx-normal tx-roboto tx-white">{{$listaCurso->curso_nome}}</h1>
           <h4 class="tx-normal tx-roboto text-white">Categoria: <span style="color: #0c9da0; font-size:1.4em;">{{$recebe}}</span></h4>

        
              <p class="wd-md-500 mg-md-l-auto text-justify mg-md-r-auto mg-b-25">{!!$listaCurso->curso_descricao!!}</p>
        
          
            <p class="mg-b-0 tx-24">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
          </p>
          <div class="botton-0">
              <button class="btn btn-primary  mg-b-10"><i class="fa fa-send mg-r-10"></i><a href="/cursonegocio">Cursos</a></button>
               <button class="btn btn-primary mg-b-10"><i class="fa fa-send mg-r-10"></i><a href="/cursonegocio">Registrar</a></button>
          </div>
          
         </div>
         
        <div class="col-sm-6">
            @if($listaCurso->curso_link!=null)
        <div class="vizualizar-vedeo"> 
        </div>
     @else
        <img src="http://localhost:/yetoafrica/nossafrica20_01_20/yetoafricateste-main/storage/app/public/{{$listaCurso->curso_img}}" alt="imagem do curso" >
     @endif
        
      <iframe src="{{$listaCurso->curso_link}}" gesture="media" allow="encrypted-media"  allowfullscreen  style="width:100%;height:40vh;"></iframe> 
      
     </div>
     </div>
</div>
</div>
</div>
</div>

<div class="detahe container">
     <div class="row">
            <div class="col-md-6 col-lg-4">
                <h3 class="tx-inverse mg-b-20">Este curso inclui</h3>
              <ul class="list-group list-group-striped">
                <li class="list-group-item rounded-top-0">
                  <p class="mg-b-0">
                      <i class="fa fa-cube tx-info mg-r-8"></i>
                      <strong class="tx-inverse tx-medium">2,5 horas de vídeo sob demanda</strong>
                    </p>
                </li>
                <li class="list-group-item">
                    <p class="mg-b-0">
                      <i class="fa fa-download tx-info mg-r-8"></i>
                      <strong class="tx-inverse tx-medium">50 recursos para download</strong>
                    </p>
                </li>
                <li class="list-group-item">
                   <p class="mg-b-0">
                  <i class="fa fa-cube tx-info mg-r-8"></i>
                  <strong class="tx-inverse tx-medium">Acesso total vitalício</strong>
                </p>
                </li>
                <li class="list-group-item rounded-bottom-0">
                     <p class="mg-b-0">
                  <i class="fa  fa-video-camera tx-info mg-r-8"></i>
                  <strong class="tx-inverse tx-medium">2,5 horas de vídeo sob demanda</strong>
                </p>
                </li>
              </ul>
            </div><!-- col-4 -->
            
          </div>
          
          
          
          <div class="descricao">
              <div class="media wd-lg-80p d-block d-sm-flex pd-20 pd-sm-40 bd">
            <div class="media-body mg-t-20 mg-sm-t-0">
              <h3 class="tx-inverse mg-b-20">Descricao</h3>
              <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
              <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
              <p class="mg-b-0">It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour...</p>
            </div><!-- media-body -->
          </div>
          </div>
          
          
          <div class="container" style="">
<h3 class="tx-inverse mg-b-20">Modúlos</h3>
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="false">
          @foreach($modulos as $lista)
        <div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingOne">
								<h4 class="panel-title">
									<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$lista->id}}" aria-expanded="true" aria-controls="collapseOne">
									{{$lista->modulo_titulo}} 
									</a>
								</h4>
              </div>
              
							<div id="collapse{{$lista->id}}" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading{{$lista->id}}">
								<div class="panel-body">
                  @foreach($listAulas as $aulas)
                    @if($aulas->modulo_id==$lista->id)	
                    
                    <ul class="list-group list-group-striped">
                      <li class="list-group-item rounded-top-0">
                        <p class="mg-b-0">
                          {{$aulas->aula_titulo}}
                        </p>
                      </li>
                      
                      <!-- add more here -->
                    </ul>
                                
                     
                      @endif
                    @endforeach
                  
                </div>
               
				      </div>
      </div>
      @endforeach
			</div><!--- END ROW -->	
<div class="jumbotron jumbotron-detalhe ">
  <h1>É hoje ou nunca</h1>
  <p>A yetoafrica está a trabalhar para garantir o teu futuro como profissional</p>
  <div>
      <a href="" class="btn btn-primary btn-with-icon botao-comprar">
  <div class="ht-40 justify-content-between">
    <span class="pd-x-15">Compre Agora</span>
    <span class="icon wd-40"><i class="fa fa-shopping-cart"></i></span>
  </div>
</a>
  </div>
  
</div>

</div>

   
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

<script>

const accordionItemHeaders = document.querySelectorAll(".accordion-item-header");

accordionItemHeaders.forEach(accordionItemHeader => {
  accordionItemHeader.addEventListener("click", event => {
    
    // Uncomment in case you only want to allow for the display of only one collapsed item at a time!
    
    // const currentlyActiveAccordionItemHeader = document.querySelector(".accordion-item-header.active");
    // if(currentlyActiveAccordionItemHeader && currentlyActiveAccordionItemHeader!==accordionItemHeader) {
    //   currentlyActiveAccordionItemHeader.classList.toggle("active");
    //   currentlyActiveAccordionItemHeader.nextElementSibling.style.maxHeight = 0;
    // }

    accordionItemHeader.classList.toggle("active");
    const accordionItemBody = accordionItemHeader.nextElementSibling;
    if(accordionItemHeader.classList.contains("active")) {
      accordionItemBody.style.maxHeight = accordionItemBody.scrollHeight + "px";
    }
    else {
      accordionItemBody.style.maxHeight = 0;
    }
    
  });
});
</script>


<script async src="https://static.addtoany.com/menu/page.js" ></script>
 </div>

  </div>    




  @endsection