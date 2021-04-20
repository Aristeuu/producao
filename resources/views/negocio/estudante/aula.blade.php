@extends('layouts.admin')

@section('content')
<div class="site">
		@include('layouts.menu')
    <div class="base-geral">
			<div class="caixa">
				<h2 class="titulo"><span class="case"><i class="ico curso"></i>Titulo do curso</span><i class="seta"></i></h2>
				@if($comprovante->isEmpty())
                    @if($compras[0]->status=='PE')
			        <a href="/pagamento/{{$id_curso}}" type="button" class="btn btn-danger"><i class="marcado"></i></i>Pagar Curso</a>
                    @endif
                 @else
                    @if($compras[0]->status=='PE' &&   $comprovante[0]->comprovante ==null ) 
                    <a href="/pagamento/{{$id_curso}}" type="button" class="btn btn-danger"><i class="marcado"></i></i>Pagar Curso</a>
                    @endif
                @endif
			</div>
			<div class="base-home">
			<div class="rows base-cursos ver_videos py-3">
				<div class="col-9 d-flex">
						<div class="caixa">
							<span class="titulo2">{{$listAulas[0]->aula_titulo}}</span>
							<div class="caixa-video">
								<div class="caixa-embed">
									<iframe src="{{$listAulas[0]->aula_link}}" class="embed-item" width="655" height="360"  allowfullscreen></iframe>
									
									
                                    
								</div>
								<!--div class="controles">
									<a href="/aulaestudante/" class="btn anterior">Anterior</a>
									<a href="/aulaestudante/" class="btn proximo">Próximo</a>  
								</div--> 
							</div>
						</div>

						{!! $listAulas->links() !!}
							
				</div>
				<div class="col-3 d-flex">	
					<div class="caixa">					
					<div class="menu-sidebar">		
						<span class="titulo2">Lista de aulas</span>
						<div class="scroll-lista">
							<ul>
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
	  {{$modulo->modulo_titulo}} <i class="fas fa-angle-down rotate-icon"></i>
	  </h5>
	</a>
  </div>

  <!-- Card body -->
  <div id="collapseTwo{{$modulo->id}}" class="collapse" role="tabpanel" aria-labelledby="headingTwo{{$modulo->id}}"
	data-parent="#accordionEx1">
	<div class="card-body">
<ul>
@foreach($listAulas as $aulas)	
								@if($aulas->modulo_id==$modulo->id)
								<td><li align="left">
											
										
											@if($aulas->aula_status==0 && $compras[0]->status=='PE' )
											<a><i class="marcado"></i>{{$aulas->aula_titulo}}</a>
											@endif

											@if($aulas->aula_status==2 && $compras[0]->status=='PE')
											<a href="/aulaestudante/{{$id_curso}}/{{$aulas->id}}"><i class="marcado"></i></i>{{$aulas->aula_titulo}}</a>
											@endif
											
									    	@if($compras[0]->status=='PA')
											<a href="/aulaestudante/{{$aulas->id}}"><i class="marcado"></i></i>{{$aulas->aula_titulo}}</a>
											@endif										
										
										
										
										
										
										
										
										</td>	
								@endif
								@endforeach	
								
</ul>					 
									 
											
							
						</div>
						</div>
						@endforeach		
					

					</div>

</div>
							</ul>
						</div>
					</div>	
					</div>	
				</div>
			</div>
			<div class="rows base-cursos ver_videos pb-3">
				<div class="col-9 mb-3">
					<div class="v-downloads">
					<div class="caixa">
						<span class="titulo2">ARQUIVOS DISPONÍVEÍS PARA DOWNLOADS</span>						
							<ul>
								<li><a href="http://producao.yetoafrica.com/storage/app/public/{{$listAulas[0]->aula_conteudo}}" class="icon" target="_blank">Conteúdo complementar</a></li>	
								
							</ul>
					</div>
				</div>
				
				</div>
			</div>				
		
@endsection

