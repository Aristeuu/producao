@extends('layouts.admin')




@section('content')
<div class="site">
		@include('layouts.menu') 
	
         
    
		<div class="base-home">
			<div class="rows base-cursos py-3">
				<div class="col-12">
						<div class="caixa">
							<div class="base-caixa-curso rows">
								<div class="col-4">
									<div class="thumb"><img src="{{$src}}{{$listaCurso->curso_img}}"></div>
								</div>
								<div class="col-8">
                <curso_single 
                    titulos="{{$listaCurso->curso_nome}}" imagem="{{$listaCurso->curso_img}}"
                data="{{$listaCurso->curso_data}}"
                modulos="{{$contMod}}"
                aulas="{{$contAula}}"

                item="{{$listaCurso->curso_status}}"
                ativar="/disp/{{$listaCurso->id}}"
                desativar="/dispOff/{{$listaCurso->id}}"
                
               
                  
                  ></curso_single>									
									
                                   

									
									
									
									
									
									
									
									
									
								</div>	
							</div>
                </div>
        </div>
      </div>
    </div>   
							
						 
						
	<div class="lista">
           
					<div class="caixa">
						     <button class="btn btn-primary " data-toggle="modal" data-target="#modalmodulo">Novo Modulo</button>
						     <button  class="btn btn-teal " data-toggle="modal" data-target="#modalaula">Carregar aula</button>
                    </div>
                    
					
						
  <div id="modalmodulo" class="modal fade">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content bd-0 tx-14">
                <div class="modal-header pd-y-20 pd-x-25">
                  <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Crie o módulo do curso</h6>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body pd-25">
                  <h4 class="lh-3 mg-b-20"><a  class="tx-inverse hover-primary">
                      <form css="" action="{{route('modulos.store')}}" method="post" enctype="multipart/form-data" token="{{ csrf_token() }}">  
    {{ csrf_field() }}

    <div class="row">
    <div class="col col-md-6">
            <div class="form-group">
                <label for="specialidade" class="control-label">Título: </label> 
                <input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="Design" id="modulo_titulo" name="modulo_titulo" required >
               
            </div>
    </div>

    <div class="col col-md-6">
<div class="form-group">
    <label for="titulo" class="control-label">Curso</label>
    <select  name="id_curso" class="form-control">
     <option value="{{$listaCurso->id}}">{{$listaCurso->curso_nome}}</option>		
    </select>
</div>
    
</div>
</div>

<div class="row">
     <div class="col col-lg-12">
            <div class="form-group"> 
                <label for="email" class="control-label">Descricao</label>
                <ckeditor name="modulo_descricao"  id="modulo_desci"  v-bind:config="{
                    toolbar: [
                      [ 'Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript' ]
                    ],
                    height: 200
                  }" required>
                </ckeditor>
               
            </div>
    </div>
</div>
    

    

                 
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium">Salvar</button>
                  <button type="button" class="btn btn-secondary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" data-dismiss="modal">Fechar</button>
                </div>
                </form></a></h4>
              </div>
            </div><!-- modal-dialog -->
          </div><!-- modal -->
</div>


  <!--modal-->
	       <!-- BASIC MODAL -->
          <div id="modalaula" class="modal fade">
            <div class="modal-dialog modal-dialog-centered" role="document">
            <form action="{{route('aula.store')}}" method="post" enctype="multipart/form-data" token="{{ csrf_token() }}">
                 {{ csrf_field() }}
              <div class="modal-content bd-0 tx-14">
                <div class="modal-header pd-y-20 pd-x-25">
                  <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Carregando sua aula</h6>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body pd-25">
                  <div class="row">    
                    <div class="col col-md-6">
                            <div class="form-group">
                                <label for="titulo" class="control-label">Modulos</label>
                                <select  name="modulo_id" class="form-control">
                                    @foreach($listamodulos as $modulo)
                                 <option value="{{$modulo->id}}">{{$modulo->modulo_titulo}}</option>	
                                    @endforeach
                                </select>
                            </div>
                                
                    </div>
                </div>    
                  <div class="row">           
                        <div class="col col-md-6">
                            <div class="form-group">
                                <label for="aula_titulo" class="control-label">Título</label> 
                                <input class="form-control" placeholder="Título do Vídeo" type="text" id="aula_titulo" name="aula_titulo" required>
                               
                            </div>
                        </div>

                        <div class="col col-md-6">
                            <div class="form-group">
                                <label for="specialidade" class="control-label">Adicionar Aula</label> 
                                <input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="Link da Aula" id="curso_link" name="aula_link" required>
                               
                            </div>
                        </div>
                  </div> 
                  
                  <div class="row">        
                
                        <div class="col col-md-6">
                            <div class="form-group">
                                <label for="aula_titulo" class="control-label">Descrição</label>
                                <textarea class="form-control has-feedback-left" id="inputSuccess2" placeholder="Descrição" id="desc_aula" name="aula_descricao" required></textarea>               
                               
                            </div> 
                        </div>
            
                        <div class="col col-md-6">
                            <div class="form-group">
                                <label for="name" class="control-label">Duração:</label> 
                                <input type="float" class="form-control has-feedback-left" id="inputSuccess2" placeholder="Duração" name="aula_duracao"  required>
                           </div>   
                        </div>
                        
                 </div>
                 <div class="row">        
         
        
                    <div class="col col-md-6">
                        <div class="form-group">
                            <label for="aula_conteudo" class="control-label">Arquivo complementar:</label> 
                            <input type="file" class="form-control has-feedback-left" id="inputSuccess2" placeholder="" id="aula_conteudo" name="aula_conteudo"  >
                           
                        </div>
                    </div>     
   
                </div>
                        
                  <p class="mg-b-5"> </p>
                   
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium">Enviar</button>
                  <button type="button" class="btn btn-secondary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" data-dismiss="modal">Close</button>
                </div>
              </div>
              </form>
            </div><!-- modal-dialog -->
          </div><!-- modal -->
	  
	  
	           <!--endModal-->

	  



    
						

							
													
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
	<div>
	     <a href="/edit/{{$modulo->id}}">editar</a>|<a href="/delete/{{$modulo->id}}">Eliminar</a>
    </div>	     
    <div>
   
	  <!--a href="/upload/{{$modulo->id}}" class="btn btn-xs btn-success"><i class="fa fa-eye"></i>Carregar Aula</a-->
	  
  </div>
  
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
										<td align="left"><i class="ico iassistido"></i>visto</td>
										<td align="left"><i class="ico iaula"></i>Aula</td>
									<td align="left"><a href="/del/{{$aulas->id}}"><i class="fa fa-trash"></i>Eliminar</a></td>

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
<!-- Accord
<!-- Accordion card -->
	@endforeach	
</div>

</div>



			</div>


		


@endsection
