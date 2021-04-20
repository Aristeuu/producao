@extends('layouts.admin')
<modulo
v-bind:titulos="['Título','Descricao','Curso']"

v-bind:itens="{{json_encode($listamodulos)}}"
 
sms="{{Session::get('sms')}}"

>


</modulo>
@section('content')
<div class="site">
		@include('layouts.menu') 
		<div class="base-geral">
		
		<div class="caixa">
			<h2 class="titulo"><span class="case"><i class="ico duvida"></i>Curso</span> Curso de {{$listaCurso->curso_nome}}</h2>
		</div>
		
		<div class="base-home">
			<div class="rows base-cursos py-3">
				<div class="col-12">
						<div class="caixa">
							<div class="base-caixa-curso rows">
								<div class="col-4">
									<div class="thumb"><img src="http://producao.yetoafrica.com/storage/app/public/{{$listaCurso->curso_img}}" style="max-width: 100%;	width: 360px; height: 260px; object-fit: cover;"></div>
								</div>
								<div class="col-8">
									<span class="titulo">FORMAÇÃO DE {{$listaCurso->curso_nome}}</span>
									<ul>
										<li><i class="ico data"></i><small>DATA DE PUBLICAÇÃO:</small><span>{{$listaCurso->curso_data}}</span></li>
										<li><i class="ico exercicio"></i><small>quantidade:</small> <span>{{$contMod}} módulos</span></li>
										<li><i class="ico qtd"></i><small>Quantidade:</small> <span>{{$contAula}} Aulas</span></li>
									</ul>
									@if($listaCurso->curso_status==0)
									
									<i class="ico alert"></i><span class="btn btn-warning">Em análise</span>
									<a  href="/on/{{$listaCurso->id}}" class="btn btn-danger">Off</a>
									@endif
									
									
									@if($listaCurso->curso_status==1)

                                        <td>
                                            
                                        <a class="btn btn-info">Aprovado</a>
                                        
                                        </td>
                                        <a  href="/off/{{$listaCurso->id}}" class="btn btn-success">On</a>
                                        
                                    @endif
                                        
                                    @if($listaCurso->curso_status==3)
                                        
                                        <td><a class="btn btn-warning">Público</a></td>
                                        
                                        
                                    @endif

									
									
									
									
									
									
									
									
									
								</div>	
							</div>
				        </div>
							
						 
						
	<div class="lista">
        
						<div class="caixa">
						
						
							
						</span>
						





						
						

							<!--Accordion wrapper-->	
													
<div class="accordion md-accordion" id="accordionEx1" role="tablist" aria-multiselectable="true">
@foreach($listamodulos as $modulo)


<!-- Accordion card -->
<div class="card">
 
  <!-- Card header -->
  
  <div class="card-header" role="tab" id="headingTwo{{$modulo->id}}">
	
	<a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapseTwo{{$modulo->id}}"
	  aria-expanded="false" aria-controls="collapseTwo1">
	  <h5 class="mb-0">
	  {{$modulo->modulo_titulo}}<i class="fas fa-angle-down rotate-icon"></i>	  	  
	  </h5> 	  
	</a>

  <!-- Card body -->
  <div id="collapseTwo{{$modulo->id}}" class="collapse" role="tabpanel" aria-labelledby="headingTwo{{$modulo->id}}"
	data-parent="#accordionEx1">
	<div class="card-body">
	<table cellpadding="0" cellspacing="0" border="0">
								
							<tbody>						 
								@foreach($listAulas as $aulas)	
								@if($aulas->modulo_id==$modulo->id)
								
								<tr>									
                                    <div class="mu-about-us-right">  
                                    @if($listaCurso->curso_status==0)
									
									<td align="left"><a id="mu-abtus-video" target="mutube-video" ><i class="ico ititulo"></i>{{$aulas->aula_titulo}}</a></td>
									@else
									    <td align="left"><a href="{{$aulas->aula_link}}" id="mu-abtus-video" target="mutube-video" ><i class="ico ititulo"></i>{{$aulas->aula_titulo}}</a></td>                                       
									@endif
                                        
										<td align="left"><i class="ico iduracao"></i>{{$aulas->aula_duracao}}</td>
									@if($aulas->aula_status==0)	
									    <td align="left"><a href="/admin_aulafree/{{$aulas->id}}" class="btn-danger">Grátis Off</a></td>
                                    @endif
                                    
                                    @if($aulas->aula_status==2)	
									    <td align="left"><a href="/admin_aulades/{{$aulas->id}}" class="btn-success">Grátis On</a></td>
									    
                                    @endif
								</tr>	
								@endif
								@endforeach				 
											
								</tbody>
							</table>
						</div>
						</div>
					</div>
				<!--sidebar									
			
	</div>
  </div>

</div>
<!-- Accordion card -->
@endforeach
<!-- Accordion card -->

</div>



			</div>


		


@endsection
