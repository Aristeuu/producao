@extends('layouts.admin')

@section('content')

		@include('layouts.menu') 
	
<div class="br-pagebody detalhes-form">
	<div class="br-section-wrapper">
      <div class="row ht-100p">

          <div class="col-md-4">
            <div class="thumb"><img src="{{$src}}{{$listaCurso->curso_img}}" width="400px"></div>   
          </div>

          <div class="col-8 inf">
              <div class="detal">
                <h4 class=" tx-12 d-inline-block mg-b-10 texto-12">Formação de {{$listaCurso->curso_nome}}</h4>
              <ul>
                  <li> 
                      
                  <i class="fa fa-calendar"></i>
                  <small>DATA DE PUBLICAÇÃO:</small>
                  <span>{{$listaCurso->curso_data}}</span>
                  
                
                </li>
                   <li> 
                      
                  <i class="fa fa-bars"></i>
                  <small>Módulos:</small>
                  <span>{{$contMod}}</span>
                  
                
                </li>

                    <li> 
                      
                  <i class="fa fa-graduation-cap"></i>
                  <small>Aulas:</small>
                  <span>{{$contAula}}</span>
                  
                
                </li>
                  
              </ul>
              <h4 class=" tx-12 d-inline-block mg-b-10 texto-12">Coprodução</h4>
            <div class="row">
              <div class="col col-md-2">
                <label>
                  <p>
                  <strong>Plataforma</strong> 10%
                  </p>
                </label> 
              </div>
              <div class="card-profile-img">                
                <img src="http://localhost/yetoafrica/storage/app/public/{{auth()->user()->foto}}" class="wd-32 rounded-circle" alt="" id="imgPhoto">				                               
                {{$id_formador->name}}
              </div><!-- card-profile-img -->    
                
           
                @if($buscarCoprodutor->isNotEmpty())               
                  <div class="card-profile-img">                
                    <img src="http://localhost/yetoafrica/storage/app/public/{{$buscarCoprodutor[0]->foto}}" class="wd-32 rounded-circle" alt="" id="imgPhoto">				                               
                    {{$buscarCoprodutor[0]->name}}
                    {{$buscarCoprodutor[0]->coprod_percent}}%
                  
                  </div><!-- card-profile-img -->  
                 @else
                 <span></span>                   
                 
                @endif


                    @if(@isset($listaCurso->id_coprodutor))
                        <span></span>
                    @else
                      <modal_link  nome="coproducao" titulo="coprodução" css="btn btn-outline-info active" clas="fa fa-user-plus"></modal_link>                    
                    @endif
                    
             
                
            </div>
           


              <div class="btn-analise" style="margin-top:4rem">
                  
                  @if($listaCurso->curso_status==0)
									
									<td>
                                            
                    <button class="btn btn-outline-warning active btn-block ">Em análise</button>
                                  
                </td>
									@endif
									
									
									@if($listaCurso->curso_status==1)

                      <td>
                                            
                          <button class="btn btn-outline-teal active btn-block ">Aprovado</button>
                                        
                      </td>
                      <button class="btn btn-outline-teal disabled btn-block mg-b-10"><a  href="/disp/{{$listaCurso->id}}" >Disponibilizar</a> </button>
                                        
                  @endif
                                        
                  @if($listaCurso->curso_status==3)
                                        
                    <td> <button class="btn btn-outline-success active btn-block">Público</button></td>
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
             
             <modal_link tipo="button" nome="modulo" titulo="Novo Modulo" css="btn btn-outline-primary active btn-block mg-b-10"></modal_link>
            @if ($listamodulos->isNotEmpty())
                <modal_link tipo="button" nome="aula" titulo="Carregar Aula" css="btn btn-outline-teal active btn-block mg-b-10 bt-2"></modal_link>
            @endif
             
            
              
        </div>

   

      
        <!-- modal adicionar modulo-->
           <modal nome="modulo" titulo="Adicionando Modulo">
                  <formulario action="{{route('modulos.store')}}" method="post" enctype="multipart/form-data" token="{{ csrf_token() }}">
                    {{ csrf_field() }}

                    <input type="hidden" id="custId" name="id_curso" value="{{$listaCurso->id}}">

                    <div class="form-layout form-layout-1">
                      <div class="row mg-b-25">
                        <div class="col-lg-12">
                          <div class="form-group">
                            <label class="form-control-label">Título: <span class="tx-danger">*</span></label>                           
                            <input type="text" class="form-control" placeholder="Modulo 01" id="modulo_titulo" name="modulo_titulo" required >
                            
                          </div>
                        </div><!-- col-4 -->                                                                                           
                        <div class="col-lg-12">
                          <div class="form-group">
                            <label class="form-control-label">Descrição: <span class="tx-danger">*</span></label>                            
                            <textarea class="form-control" name="modulo_descricao"  id="modulo_desci" required></textarea>
                          </div>
                        </div><!-- col-12 -->                                             
                      </div><!-- row -->
          
                    </div>        
          
                               
                       <div class="botn-geral">
                     <input type="submit" value="Enviar" class="btn btn-teal active btn-block mg-b-10"  name="Cadastrar">
                    </div>     
                
                  </formulario>
                  <span slot="botoes">
                    <input type="submit" value="Enviar" class="btn btn-info"  name="Cadastrar">
                  </span>
                </modal>


                <!--end Modal's-->

              
                <!--Modal aula-->

                <modal nome="aula" titulo="Carregar Aula">
                  <formulario action="{{route('aula.store')}}" method="post" enctype="multipart/form-data" token="{{ csrf_token() }}">
                    {{ csrf_field() }}

                    <input type="hidden" id="custId" name="id_curso" value="{{$listaCurso->id}}">

                    <div class="form-layout form-layout-1">
                      <div class="row mg-b-25">
                        <div class="col-lg-12">
                          <div class="form-group">
                            <label class="form-control-label">Título: <span class="tx-danger">*</span></label>                           
                            <input type="text" class="form-control" placeholder="Título da aula" type="text" id="aula_titulo" name="aula_titulo" required >
                            
                          </div>
                        </div><!-- col-4 -->                                                                                           
                        <div class="col-lg-12">
                          <div class="form-group">
                            <label class="form-control-label">Descrição: <span class="tx-danger">*</span></label>                            
                            <textarea class="form-control" placeholder="Descrição da aula" id="desc_aula" name="aula_descricao" required></textarea>
                          </div>
                        </div><!-- col-12 -->  
                        <div class="col-lg-12">
                          <div class="form-group">
                            <label class="form-control-label">Link da Aula: <span class="tx-danger">*</span></label>                           
                            <input type="text" class="form-control" placeholder="Link da Aula" id="aula_link" name="aula_link" required >                            
                          </div>
                        </div><!-- col-12 -->        
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label class="form-control-label">Módulos: <span class="tx-danger">*</span></label>                           
                            <select  name="modulo_id" class="form-control">                                
                              @foreach($listamodulos as $modulo)
                                <option value="{{$modulo->id}}">{{$modulo->modulo_titulo}}</option>	
                              @endforeach						
                            </select>
                          </div>
                        </div><!-- col-12 -->        
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label class="form-control-label">Duração: <span class="tx-danger">*</span></label>                           
                            <input type="text" class="form-control" placeholder="Duração da Aula" id="aula_duracao" name="aula_duracao" required >                            
                          </div>
                        </div><!-- col-12 -->        
                        <div class="col-lg-12">
                          <div class="form-group">
                            <label class="form-control-label">Arquivo complementar: </label>                           
                            <input type="file" class="form-control" placeholder="" id="aula_conteudo" name="aula_conteudo">                            
                          </div>
                        </div>                                         
                      </div><!-- row -->
          
                    </div>        
          
                         
                   <div class="botn-geral">
                     <input type="submit" value="Enviar" class="btn btn-teal active btn-block mg-b-10"  name="Cadastrar">
                    </div>   
                  </formulario>
                  <span slot="botoes">
                    <input type="submit" value="Enviar" class="btn btn-info"  name="Cadastrar">
                  </span>
                </modal>      
                                            
                
                
                <!--end Modal-->

                
                
    <div id="accordion6" class="accordion accordion-head-colored accordion-info mg-t-20" role="tablist" aria-multiselectable="true">
      @foreach($listamodulos as $modulo)
            <div class="card">
              <div class="card-header" role="tab" id="headingOne{{$modulo->id}}">
                <h6 class="mg-b-0">
                  <a data-toggle="collapse" data-parent="#accordion6" href="#collapseOne{{$modulo->id}}" aria-expanded="false" aria-controls="collapseOne6" class="collapsed text-16">
                    {{$modulo->modulo_titulo}}
                    <div class="btn-modul">
                      
                      <span class="btn bttn-edit" onclick="Eliminar({{$modulo->id}})"><i class="fa fa-trash" style="color:red;"></i></span>
                    <modal_link tipo="button" nome="editarModulo" titulo="" css="btn btn-outline-teal" clas="fa fa-edit" v-bind:item="{{json_encode($modulo)}}" url="/edit/"></modal_link>
                    </div>
                  </a>
                 
                </h6>
                
              </div><!-- card-header -->

              <div id="collapseOne{{$modulo->id}}" class="collapse" role="tabpanel" aria-labelledby="headingOne{{$modulo->id}}" style="">
                <div class="card-block pd-20">                    
                  <table cellpadding="0" cellspacing="0" border="0" >
                    <tbody>
                        @foreach($listAulas as $aulas)
                                @if($aulas->modulo_id==$modulo->id)
                                    <tr>
                                          
                                              @if ($listaCurso->curso_status==0)
                                                  <td align="left"><a id="mu-abtus-video" target="mutube-video" ><i class="ico ititulo"></i>{{$aulas->aula_titulo}}</a></td>
                                                  @else
                                                  <td align="left"><a href="{{$aulas->aula_link}}" id="mu-abtus-video" target="mutube-video" ><i class="ico ititulo"></i>{{$aulas->aula_titulo}}</a></td>                                                  
                                              @endif
                                                <td align="left"><i class="ico iduracao"></i>{{$aulas->aula_duracao}}</td>
                                                <td align="left"><i class="fa fa-eye"></i>visto</td>
                                                <td align="left"><i class="fa fa-graduation-cap"></i>Aula</td>
                                                @if($aulas->aula_status==0)	
									                                <td align="left"><a href="/admin_aulafree/{{$aulas->id}}" class="btn-danger">Grátis Off</a></td>
                                                @endif
                                    
                                                @if($aulas->aula_status==2)	
									                                <td align="left"><a href="/admin_aulades/{{$aulas->id}}" class="btn-success">Grátis On</a></td>									    
                                                @endif
                                                <td align="left" class="m-left"><modal_link tipo="button" nome="Aulaedit" titulo="" clas="fa fa-edit" css="btn btn-outline-teal" v-bind:item="{{json_encode($aulas)}}" url="/edit/"></modal_link></td>
                                                
                                                <td align="left"><a href="/del/{{$aulas->id}}" style="color:red"><i class="fa fa-trash" style="color:red"></i></a></td>
                                          
                                    </tr>
                                @endif    
                        @endforeach	
                    </tbody>   
                  </table>
                </div>
              </div>
            </div>
            <modal nome="editarModulo" titulo="">
              <formulario action="/updateMod" method="post" enctype="multipart/form-data" token="{{ csrf_token() }}">
                {{ csrf_field() }}        
                
                <input type="hidden" name="id" v-model="$store.state.item.id">

                <div class="form-layout form-layout-1">
                  <div class="row mg-b-25">
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label class="form-control-label">Título: <span class="tx-danger">*</span></label>                           
                        <input type="text" class="form-control" placeholder="Título da aula" type="text" id="modulo_titulo" name="modulo_titulo" v-model="$store.state.item.modulo_titulo" required >
                        
                      </div>
                    </div><!-- col-4 -->                                                                                           
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label class="form-control-label">Descrição: <span class="tx-danger">*</span></label>                            
                        <textarea class="form-control" placeholder="" id="modulo_desc" name="modulo_descricao" v-model="$store.state.item.modulo_descricao" required></textarea>
                      </div>
                    </div><!-- col-12 -->                   
                                                                                                        
                  </div><!-- row -->
      
                </div>        
      
                      
               <div class="botn-geral">
                     <input type="submit" value="Enviar" class="btn btn-teal active btn-block mg-b-10"  name="Cadastrar">
                    </div>   
              </formulario>
              <span slot="botoes">
                <input type="submit" value="Enviar" class="btn btn-info"  name="Cadastrar">
              </span>
            </modal>      
                                        
                            
            <!--end Modal-->


            <modal nome="Aulaedit" titulo="Editar Aula">
              <formulario action="/updateAula" method="post" enctype="multipart/form-data" token="{{ csrf_token() }}">
                {{ csrf_field() }}

                <input type="hidden" id="custId" name="id_aula" v-model="$store.state.item.id">

                <div class="form-layout form-layout-1">
                  <div class="row mg-b-25">
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label class="form-control-label">Título: <span class="tx-danger">*</span></label>                           
                        <input type="text" class="form-control" placeholder="Título da aula" type="text" id="aula_titulo" name="aula_titulo" v-model="$store.state.item.aula_titulo" required >
                        
                      </div>
                    </div><!-- col-4 -->                                                                                            
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label class="form-control-label">Descrição: <span class="tx-danger">*</span></label>                            
                        <textarea class="form-control" placeholder="Descrição da aula" id="desc_aula" name="aula_descricao" v-model="$store.state.item.aula_descricao" required></textarea>
                      </div>
                    </div><!-- col-12 -->  
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label class="form-control-label">Link da Aula: <span class="tx-danger">*</span></label>                           
                        <input type="text" class="form-control" placeholder="Link da Aula" id="aula_link" name="aula_link" v-model="$store.state.item.aula_link" required >                            
                      </div>
                    </div><!-- col-12 -->        
                    <div class="col-lg-6">
                      <div class="form-group ">
                        <label class="form-control-label">Módulos: <span class="tx-danger">*</span></label>                           
                        <select  name="modulo_id" class="form-control">                                
                          @foreach($listamodulos as $modulo)
                            <option value="{{$modulo->id}}">{{$modulo->modulo_titulo}}</option>	
                          @endforeach						
                        </select>
                      </div>
                    </div><!-- col-12 -->        
                    <div class="col-lg-6">
                      <div class="form-group ">
                        <label class="form-control-label">Duração: <span class="tx-danger">*</span></label>                           
                        <input type="text" class="form-control" placeholder="Duração da Aula" id="aula_duracao" name="aula_duracao" v-model="$store.state.item.aula_duracao" required >                            
                      </div>
                    </div><!-- col-12 -->        
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label class="form-control-label">Arquivo complementar: </label>                           
                        <input type="file" class="form-control" placeholder="" id="aula_conteudo" name="aula_conteudo" >                            
                      </div>
                    </div>                                         
                  </div><!-- row -->
      
                </div>        
      
                           
                <div class="botn-geral">
                     <input type="submit" value="Enviar" class="btn btn-teal active btn-block mg-b-10"  name="Cadastrar">
                    </div> 
              </formulario>
              <span slot="botoes">
                <input type="submit" value="Enviar" class="btn btn-info"  name="Cadastrar">
              </span>
            </modal>      
                                      
                       
            <!--end Modal-->

         


        


       @endforeach     
           
            </div>
        <!-- modal adicionar coproducao-->
        <modal nome="coproducao" titulo="Adicionar Coprodução">
          <formulario action="/coproducao/{{$listaCurso->id}}" method="post" enctype="multipart/form-data" token="{{ csrf_token() }}">
              {{ csrf_field() }}
  
              <input type="hidden" id="custId" name="id_curso" value="{{$listaCurso->id}}">
              <input type="hidden" id="id_formador" name="id_formador" value="{{$id_formador->id}}">           
              <span>
                
                <div class="radio_tabs">
                  <label class="radio_wrap" data-radio="radio_1">
                    <input type="radio" name="sports" class="input" checked>
                    <span class="radio_mark">
                    Yetoáfrica 50%
                    </span>
                  </label>
                  <label class="radio_wrap" data-radio="radio_2">
                    <input type="radio" name="sports" class="input">
                    <span class="radio_mark">
                    Formadores
                    </span>
                  </label>
                
                </div>
                
					<div class="content">
						<div class="radio_content radio_1">
              <input type="hidden" id="coYeto" name="coYeto" value={{$id_yeto[0]->id}}>				
							
							
						</div>
						<div class="radio_content radio_2">
            <div class="col-lg-12" style="" id="formador">  						 
              <div class="form-group">
                <label class="form-control-label">Formadores: <span class="tx-danger">*</span></label>                            
                <select  name="id_coP" class="form-control">                                
                  @foreach($listaFormadores as $formador)
                    <option value="{{$formador->id}}" id="coformador">{{$formador->name}}</option>	
                  @endforeach						
                </select>
              </div>
            </div>
            <div class="col-lg-12" id="percentagem">
              <div class="form-group">
                <label class="form-control-label">Percentagem %: <span class="tx-danger">*</span></label>                            
                <div class="input-group">                      
                  <input class="form-control" type="text" name="percenC" placeholder="10">
                  <div class="input-group-append">
                      <span class="input-group-text">%</span>
                  </div>
              </div>
              </div>
            </div><!-- col-12 -->                                                             
						
					</div>
          </div>
          <div class="botn-geral">
            <input type="submit" value="Adicionar" class="btn btn-teal active btn-block mg-b-10"  name="Cadastrar">
           </div>                   
                    
              </span>
                      
            </formulario>
            <span slot="botoes">
              <input type="submit" value="Enviar" class="btn btn-info"  name="Cadastrar">
            </span>
          </modal>
  
  
          <!--end Modal's coproducao-->
             
  
  
          


</div>
</div>



		


@endsection

