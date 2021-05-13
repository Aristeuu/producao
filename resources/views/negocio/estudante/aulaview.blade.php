@extends('layouts.admin')

@section('content')

		@include('layouts.menu')

	<div id="wrapper" class="d-flex">
		<div id="sidebar-wrapper" class="border-right">
			<div id="sidebar-heading">
				<div class="progress-indicator">
					<svg class="progress-indicator-bar progress-indicator-initial" viewBox="0 0 60 60">
					<circle class="progress-indicator-outer" fill="none" stroke="#ccc" stroke-dasharray="190" cy="30" cx="30" r="29"></circle>
					<circle class="progress-indicator-inner" fill="none" stroke-dasharray="180" stroke-dashoffset="180" cy="30" cx="30" r="29" transform="rotate(-90) translate(-60, 0)"></circle>
					
						<text class="progress-indicator-percentage" x="50%" y="55%">0%</text>
					
					</svg>
  				</div>
			</div>

			
			<div class="list-group  list-group-flush modulos">
				
			<ul class="mp-0">
							<!--Accordion wrapper-->
<div class="accordion md-accordion" id="accordionEx1" role="tablist" aria-multiselectable="true">
@foreach($listamodulos as $modulo)
<!-- Accordion card -->
<div class="card">

  <!-- Card header -->
  <div class="card-header" role="tab" id="headingTwo{{$modulo->id}}">
	<a class="collapsed list-group-item list-group-item" data-toggle="collapse" data-parent="#accordionEx1" href="#collapseTwo{{$modulo->id}}"
	  aria-expanded="false" aria-controls="collapseTwo1">
	 
	 <i class="fas fa-folder rotate-icon" style="font-size:2rem;"></i> {{$modulo->modulo_titulo}} <i class="fas fa-angle-down rotate-icon"></i>
	 
	  
	</a>
  </div>

  <!-- Card body -->
  <div id="collapseTwo{{$modulo->id}}" class="collapse" role="tabpanel" aria-labelledby="headingTwo{{$modulo->id}}"
	data-parent="#accordionEx1">
	<div class="card-body">
		<div class="table-responsive mx-3">
              <table  class="table table-hover mb-0">
              <tbody>
				
@foreach($listAulas as $aulas)	
								@if($aulas->modulo_id==$modulo->id)
								<tr>
											
                                    @if($aulas->aula_status==0 && $compras[0]->status=='PE' )
                                    <td><a>{{$aulas->aula_titulo}}</a></td>
                                    @endif

                                    @if($aulas->aula_status==2 && $compras[0]->status=='PE')
									<div class="aulas-drop">
										<td><a href="/aulaestudante/{{$id_curso}}/{{$aulas->id}}"><i class="marcado"></i></i>{{$aulas->aula_titulo}}</a></td>
										  <div class="form-check checkb"><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></div>
									</div>

						
                                    @endif
                                    
                                    @if($compras[0]->status=='PA')
									<div><a href="/aulaestudante/{{$id_curso}}/{{$aulas->id}}"><i class="marcado"></i></i>{{$aulas->aula_titulo}}</a></div>
                                    @endif										
                                                                    
										
										
										
										
										
</tr>	
									
								@endif
								@endforeach	
								</tbody>   
              </table>
              </div>	
				 
											
							
						
						</div>
						</div>
						@endforeach		

					</div>

</div>
							</ul>

			
			
			</div>
			
		</div>


		<div class="row row-sm mg-t-20 container">
          <div class="col-lg-8">
			  <div class="content-page-title">
					<h4>Titulo do Curso: {{$listAula->aula_titulo}}</h4>
				</div>
            <div class="card-inverse bd-0 mg-b-20 ht-400 ht-xs-350 ht-lg-100p">
                	
				<iframe src="{{$listAula->aula_link}}" class="embed-item" width="780" height="430"  allowfullscreen></iframe>

				

				</div><!-- pos-absolute-bottom -->
			  </div><!-- card -->
		  
		  
          <div class="col-lg-4 modulos-aluno">
            <div class=" bd-0 pd-25 ht-100p">
              
              <h5 class="tx-normal tx-roboto mg-b-15 lh-4"><a href="" class="tx-inverse hover-info">Conteúdo Complementar Disponiveís Para Downloads</a></h5>
              
			  <a href="http://producao.yetoafrica.com/storage/app/public/{{$listAula->aula_conteudo}}" target="_blank"><i class="fa fa-download pr-3"></i></a>

            </div><!-- card -->
		  </div><!-- col-4 -->
		   
        </div>
		
		

	<script type="text/javascript">
		/*const toggle = () => {
			document.getElementById("sidebar-wrapper").classList.toggle("toggled");
		};*/
		function toggle() {
			document.getElementById("sidebar-wrapper").classList.toggle("sidebar-wrappertoggled");
			//alert("funcionou");
		}
	</script>




@endsection

