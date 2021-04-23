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


              <div class="btn-analise" style="margin-top:12rem">
                  
                  @if($listaCurso->curso_status==0)
									
									<i class="ico alert"></i><span class="">Em análise</span>
									
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
             <modal_link tipo="button" nome="aula" titulo="Carregar Aula" css="btn btn-outline-teal active btn-block mg-b-10 bt-2"></modal_link>
              
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
                          <div class="form-group mg-b-10-force">
                            <label class="form-control-label">Descrição: <span class="tx-danger">*</span></label>                            
                            <textarea class="form-control" name="modulo_descricao"  id="modulo_desci" required></textarea>
                          </div>
                        </div><!-- col-12 -->                                             
                      </div><!-- row -->
          
                    </div>        
          
                               
                     <hr>            
                   <div>
                     <input type="submit" value="Enviar" class="btn btn-info"  name="Cadastrar">
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
                          <div class="form-group mg-b-10-force">
                            <label class="form-control-label">Descrição: <span class="tx-danger">*</span></label>                            
                            <textarea class="form-control" placeholder="Descrição da aula" id="desc_aula" name="aula_descricao" required></textarea>
                          </div>
                        </div><!-- col-12 -->  
                        <div class="col-lg-12">
                          <div class="form-group mg-b-10-force">
                            <label class="form-control-label">Link da Aula: <span class="tx-danger">*</span></label>                           
                            <input type="text" class="form-control" placeholder="Link da Aula" id="aula_link" name="aula_link" required >                            
                          </div>
                        </div><!-- col-12 -->        
                        <div class="col-lg-6">
                          <div class="form-group mg-b-10-force">
                            <label class="form-control-label">Módulos: <span class="tx-danger">*</span></label>                           
                            <select  name="modulo_id" class="form-control">                                
                              @foreach($listamodulos as $modulo)
                                <option value="{{$modulo->id}}">{{$modulo->modulo_titulo}}</option>	
                              @endforeach						
                            </select>
                          </div>
                        </div><!-- col-12 -->        
                        <div class="col-lg-6">
                          <div class="form-group mg-b-10-force">
                            <label class="form-control-label">Duração: <span class="tx-danger">*</span></label>                           
                            <input type="text" class="form-control" placeholder="Duração da Aula" id="aula_duracao" name="aula_duracao" required >                            
                          </div>
                        </div><!-- col-12 -->        
                        <div class="col-lg-12">
                          <div class="form-group mg-b-10-force">
                            <label class="form-control-label">Arquivo complementar: </label>                           
                            <input type="file" class="form-control" placeholder="" id="aula_conteudo" name="aula_conteudo">                            
                          </div>
                        </div>                                         
                      </div><!-- row -->
          
                    </div>        
          
                               
                     <hr>            
                   <div>
                     <input type="submit" value="Enviar" class="btn btn-info"  name="Cadastrar">
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
                      <span class="btn bttn-edit" onclick="Editar({{$modulo->id}})"><i class="fa fa-edit" style="color:teal;"></i></span>
                      <span class="btn" onclick="Eliminar({{$modulo->id}})"><i class="fa fa-trash" style="color:red;"></i></span>
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
                                                <td align="left" class="m-left"><a href="/{{$aulas->id}}" style="color:skyblue"><i class="fa fa-edit" style="color:skyblue"></i>Editar</a></td>
                                                <td align="left"><a href="/del/{{$aulas->id}}" style="color:red"><i class="fa fa-trash" style="color:red"></i>Eliminar</a></td>
                                          
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
</div>

<script type="text/javascript">

  function Eliminar(id)
  {
   
    window.location.href="/delete/"+id;
  }

  function Editar(id)
  {
    alert(id);
    //window.location.href="/edit/"+id;
  }

</script>
		


@endsection
