@extends('layouts.admin')
<modulo
v-bind:titulos="['Título','Descricao','Curso']"

v-bind:itens="{{json_encode($listamodulos)}}"
 
sms="{{Session::get('sms')}}"

>


</modulo>
@section('content')

		@include('layouts.menu') 
	
<div class="br-pagebody detalhes-form">
	<div class="br-section-wrapper">
      <div class="row ht-100p">

          <div class="col-md-4">
            <div class="thumb"><img src="http://localhost/yetoafrica/storage/app/public/{{$listaCurso->curso_img}}" width="400px"></div>   
          </div>

          <div class="col-8 inf">
              <div class="detal">
                <h4 class=" tx-12 d-inline-block mg-b-10 texto-12">Formação de {{$listaCurso->curso_nome}}</h4>
              <ul>
                  <li> 
                      
                  <i class="fa fa-edit"></i>
                  <small>DATA DE PUBLICAÇÃO:</small>
                  <span>{{$listaCurso->curso_data}}</span>
                  
                
                </li>
                   <li> 
                      
                  <i class="fa fa-edit"></i>
                  <small>DATA DE PUBLICAÇÃO:</small>
                  <span>{{$listaCurso->curso_data}}</span>
                  
                
                </li>

                    <li> 
                      
                  <i class="fa fa-edit"></i>
                  <small>DATA DE PUBLICAÇÃO:</small>
                  <span>{{$listaCurso->curso_data}}</span>
                  
                
                </li>
                  
              </ul>


              <div class="btn-analise" style="margin-top:12rem">
                  
              @if($listaCurso->curso_status==0)
									
									<i class="ico alert"></i><span class="">Em análise</span>
									
									@endif
									
									
									@if($listaCurso->curso_status==1)

                                        <td>
                                            
                                        <button class="btn btn-outline-teal active btn-block ">Aprovado</button>
                                        
                                        </td>
                                       <button class="btn btn-outline-teal disabled btn-block mg-b-10"> <a  href="/disp/{{$listaCurso->id}}" >Disponibilizar</a> </button>
                                        
                                    @endif
                                        
                                    @if($listaCurso->curso_status==3)
                                        
                                        <td>Público</td>
                                        <button class="btn btn-outline-danger active btn-block mg-b-10"> <a  href="/dispOff/{{$listaCurso->id}}">Desativar</a></button>

                                       
                                        
                                    @endif

              </div>
									
									
              </div>
									
									
									

          </div>

      </div>
    </div>
</div>


<div class="br-pagebody">
	<div class="br-section-wrapper">

        <div class="btn-modulos">
             <button class="btn btn-outline-teal active btn-block mg-b-10">Aprovado</button>
              <button class="btn btn-outline-teal active btn-block mg-b-10 bt-2">Aprovado</button>
        </div>

    <div id="accordion6" class="accordion accordion-head-colored accordion-info mg-t-20" role="tablist" aria-multiselectable="true">
            <div class="card">
              <div class="card-header" role="tab" id="headingOne6">
                <h6 class="mg-b-0">
                  <a data-toggle="collapse" data-parent="#accordion6" href="#collapseOne6" aria-expanded="false" aria-controls="collapseOne6" class="collapsed">
                    Making a Beautiful CSS3 Button Set
                  </a>
                </h6>
              </div><!-- card-header -->

              <div id="collapseOne6" class="collapse" role="tabpanel" aria-labelledby="headingOne6" style="">
                <div class="card-block pd-20">
                  A concisely coded CSS3 button set increases usability across the board, gives you a ton of options, and keeps all the code involved to an absolute minimum. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" role="tab" id="headingTwo6">
                <h6 class="mg-b-0">
                  <a class="collapsed transition" data-toggle="collapse" data-parent="#accordion6" href="#collapseTwo6" aria-expanded="false" aria-controls="collapseTwo6">
                    Horizontal Navigation Menu Fold Animation
                  </a>
                </h6>
              </div>
              <div id="collapseTwo6" class="collapse" role="tabpanel" aria-labelledby="headingTwo6">
                <div class="card-block pd-20">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" role="tab" id="headingThree6">
                <h6 class="mg-b-0">
                  <a class="collapsed transition" data-toggle="collapse" data-parent="#accordion6" href="#collapseThree6" aria-expanded="false" aria-controls="collapseThree6">
                    Creating CSS3 Button with Rounded Corners
                  </a>
                </h6>
              </div>
              <div id="collapseThree6" class="collapse" role="tabpanel" aria-labelledby="headingThree6">
                <div class="card-block pd-20">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore.
                </div>
              </div><!-- collapse -->
            </div><!-- card -->
            </div>


</div>
</div>


		


@endsection
