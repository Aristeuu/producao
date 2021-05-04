@extends('layouts.admin')

@section('content')

@can('eAdmin')


		@include('layouts.menu')				
        <div class="caixa">
			<h2 class="titulo"><span class="case"><i class="ico duvida"></i>Home</span> Seja Bem Vindo</h2>
		</div>

<div class="base-home">
        <div class="rows detalhes py-3">
			<div class="col-4">
			<figure class="caixa">
					<div class="thumb"><a href="/perfil"><img src="http://yetoafrica.com/storage/app/public/{{auth()->user()->foto}}">	</a></div>
					<figcaption>
					<a href="/perfil">	<strong>{{auth()->user()->name}}</strong></a>
							<a href="/perfil">	<small><b>Meu Perfil</b></small></a>
							<a href="/perfil">	<small>{{auth()->user()->email}}</small></a>
					</figcaption>
				</figure>
			
			</div>
		
				<div class="col">
				<div class="caixa">
					<i class="ico video"></i>
					<small>Aulas assistidas</small>
					<h3>200</h3>
				</div>
			</div>
			<div class="col">
				<div class="caixa">
					<i class="ico curso"></i>
					<small>Cursos assisitidos</small>
					<h3>20</h3>
				</div>
			</div>
			
			
        </div>  		</div>



    

  	



    </div>



@endcan          

@can('est')
@include('layouts.menu')



      <div class="tab-content br-profile-body">
        <div class="tab-pane fade active show" id="posts">
          <div class="row">
            <div class="col-lg-12">
              <div class="media-list bg-white rounded shadow-base">
                  <div class="br-pagetitle">
                    
                    <div class="row row-sm">
                        
                        <div class="bg-info rounded overflow-hidden">
					    <div class="pd-x-20 pd-t-20 d-flex align-items-center">
					  <i class="ion ion-earth tx-40 lh-0 tx-white op-7"></i>
					  <div class="mg-l-20">
						<p class="tx-10 tx-spacing-1 tx-mont tx-semibold tx-uppercase tx-white-8 mg-b-10">Meus Cursos</p>
						<p class="tx-24 tx-white tx-lato tx-bold mg-b-0 lh-1">{{$contac}}</p>
						<span class="tx-11 tx-roboto tx-white-8"></span>
					  </div>
					</div>
					<div id="ch1" class="ht-50 tr-y-1">gf</div>
				  </div>
                        
                    </div>
                  </div>    
                <center>
				<a href="/carrinho/compras"><i class="ico video"></i></a>
				<a href="/carrinho/compras"><small style="font-size: 1rem"></small></a>
					<h3>{{$contac}}</h3>
				</div>
				</center>
                
            </div><!-- col-lg-8 -->
            
          </div><!-- row -->
        </div><!-- tab-pane -->
        
      </div><!-- br-pagebody -->

    </div>
			
		
@endcan


@can('form')


@include('layouts.menu') 


 
      <div class="br-pagebody">
        <div class="br-section-wrapper">
          <div class="row">
            <div class="col-lg-12">
              <div class="">
                  <div class="br-pagetitle">
                    <div>
                      @php
                                                  
                           
                      @endphp
                          <div class="botn-geral">
                            <modal_link tipo="button" nome="adicionar" titulo="Novo curso"></modal_link>
                           @if($saldoContabilistico > 0 || $saldoContabilistico != null)
                              @if($saldoDisponivel > 0 )
                                <modal_link tipo="button" nome="solicitar" titulo="Solicitar Valores" css="btn btn-success active btn-block mg-b-10"></modal_link> 
                              @endif  
                          @endif                           
                           @if($formador_conta == null)
                              <modal_link tipo="button" nome="bankdata" titulo="Adicionar Dados Bancários"></modal_link>                          
                           @endif
                        </div>
          
                   </div>
                 
                   
                </div><!-- pagetitle -->

                <!--Modal's-->

                <modal nome="adicionar" titulo="Criando seu Curso">
                  <formulario action="{{route('cursos.store')}}" method="post" enctype="multipart/form-data" token="{{ csrf_token() }}">
                    {{ csrf_field() }}

                    <input type="hidden" id="custId" name="id_formador" value="{{$listaFormador[0]->id}}">


                    <div class="form-layout form-layout-1">
                      <div class="row mg-b-25">
                        <div class="col-lg-12">
                          <div class="form-group">
                            <label class="form-control-label">Fotografria: <span class="tx-danger">*</span></label>                           
                            <input type="file" class="form-control" placeholder="" id="curso_img" name="curso_img" required >
                            
                          </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label class="form-control-label">Curso: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="curso_nome" placeholder="Informática" required>
                          </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label class="form-control-label">Categorias: <span class="tx-danger">*</span></label>
                            <select  name="categoria_id" class="form-control">                                
                              @foreach($listaCategoria as $lista)
                              <option value="{{$lista->id}}">{{$lista->cat_nome}}</option>
                              @endforeach						
                            </select>                        
                          </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label class="form-control-label">Preço: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="curso_preco" placeholder="15000" required>
                          </div>
                        </div><!-- col-8 -->
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label class="form-control-label">Duração: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="curso_duracao" placeholder="10 dias" required>
                          </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-12">
                          <div class="form-group">
                            <label class="form-control-label">Descrição: <span class="tx-danger">*</span></label>                            
                            <textarea class="form-control" name="curso_descricao" required></textarea>
                          </div>
                        </div><!-- col-12 -->
                        <div class="col-lg-12">
                          <div class="form-group">
                            <label class="form-control-label">Vídeo Promocional: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="curso_link" placeholder="Vídeo Promocional">
                          </div>
                        </div>                        
                      </div><!-- row -->
          
                    </div>        
          
                          
                   <div class="botn-geral">
                     <input type="submit" value="Enviar" class="btn btn-teal active btn-block mg-b-10"  name="Cadastrar">
                    </div>  
                  </formulario>
                  <span slot="botoes">
                    <input type="submit" value="Enviar" class="btn btn-teal active btn-block mg-b-10"  name="Cadastrar">
                  </span>
                </modal>
                <!--end Modal's-->

                <!--Modal-->
                <modal nome="solicitar" titulo="">
                  <h4 class="lh-3 mg-b-20"><a href="" class="tx-inverse hover-primary">Saldo disponível: {{number_format($saldoDisponivel)}} Kz</a></h4>
                  <formulario  id="formSolicitar" action="{{route('operacoes.store')}}" method="post" enctype="multipart/form-data" token="{{ csrf_token() }}">
                    {{ csrf_field() }}
                  <input type="hidden" name="saldoDisponivel" value="{{$saldoDisponivel}}">
                    <div class="input-group">
                      <div class="input-group-prepend">
                          <span class="input-group-text">AKZ</span>
                      </div>
                      <input class="form-control" type="text" name="valor_retirado" required placeholder="50000">
                      <div class="input-group-append">
                          <span class="input-group-text">.00</span>
                      </div>
                    <input class="form-control" type="hidden" name="id_formador" value={{$id_formador}}>
                   <input class="form-control" type="hidden" name="email" value={{$id_email}}>
                   <input class="form-control" type="hidden" name="name" value={{$id_name}}>
                  </div>
                  <hr>
                  <button form="formSolicitar" type="submit" class="btn btn-primary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium">Enviar</button>                  
                  </formulario>
                  <span slot="botoes">
                    <button form="formSolicitar" type="submit" class="btn btn-primary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium">Enviar</button>
                  </span>                
                </modal>

              <!--end Modal's-->
                <modal nome="bankdata">
                  <formulario id="formBanco" action="{{route('formador.bancodata')}}" method="post" enctype="multipart/form-data" token="{{ csrf_token() }}">
                    {{ csrf_field() }}
                    
                      

                    <div class="form-layout form-layout-1">
                      <div class="row mg-b-25">
                        <div class="col-lg-12">
                          <div class="form-group">
                            <label class="form-control-label">Nº da Conta: <span class="tx-danger">*</span></label>                           
                            <input type="text" class="form-control" placeholder="Número da Conta" id="conta_bancaria" name="conta_bancaria" required >                            
                          </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-12">
                          <div class="form-group">
                            <label class="form-control-label">IBAN: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="iban" placeholder="AO06 0010 0034 0010 0883 0116 9" required>
                          </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-12">
                          <div class="form-group">
                            <label class="form-control-label">Titular: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="titular" placeholder="Titular" required>
                          </div>
                        </div><!-- col-12-->                
                                                
                      </div><!-- row -->
          
                    </div>    
                                   
                 <input class="form-control" type="hidden" name="id_formador" value={{$id_formador}}>

                    <div class="botn-geral">
                     <input type="submit" value="Enviar" class="btn btn-teal active btn-block mg-b-10"  name="Cadastrar">
                    </div> 


                  </formulario>
                  <span slot="botoes">
                    <button form="formBanco" type="submit" class="btn btn-teal active btn-block mg-b-10">Enviar</button>
                  </span>
                </modal>
               
          

            <div class="dashboard">

            <div class="row row-sm">
          <div class="col-sm-6 col-xl-3">
            <div class="roundede overflow-hidden">
              <div class="pd-x-20 pd-t-20 d-flex align-items-center primeiro">
                <i class="fa fa-balance-scale tx-50 lh-0 tx-color op-7"></i>
                <div class="mg-l-20">
                  <p class=" tx-spacing-1 tx-mont tx-semibold tx-uppercase tx-white-8 mg-b-10">Saldo contabilístico</p>
                  <p class="tx-24 tx-black tx-lato tx-bold mg-b-0 lh-1">{{number_format($saldoContabilistico, 2) }} Kz</p>
                </div>
              </div>
              <div class="ht-50 tr-y-1 rickshaw_graph"></div>
            </div>
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
            <div class=" roundede overflow-hidden">
              <div class="pd-x-20 pd-t-20 d-flex align-items-center segundo">
                <i class="fa fa-balance-scale tx-60 lh-0 tx-color op-7"></i>
                <div class="mg-l-20">
                  <p class=" tx-spacing-1 tx-mont tx-semibold tx-uppercase tx-white-8 mg-b-10">Saldo disponível</p>
                  <p class="tx-24 tx-black tx-lato tx-bold mg-b-0 lh-1">{{number_format($saldoDisponivel, 2) }} Kz</p>
                </div>
              </div>
              <div  class="ht-50 tr-y-1 rickshaw_graph"></div>
            </div>
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class=" roundede overflow-hidden">
              <div class="pd-x-20 pd-t-20 d-flex align-items-center terceiro">
                <i class="fa fa-balance-scale tx-60 lh-0 tx-color op-7"></i>
                <div class="mg-l-20">
                  <p class=" tx-spacing-1 tx-mont tx-semibold tx-uppercase tx-white-8 mg-b-10">Entrada</p>
                  <p class="tx-24 tx-black tx-lato tx-bold mg-b-0 lh-1">{{ number_format($entrada, 2) }} Kz</p>
                </div>
              </div>
              <div class="ht-50 tr-y-1 rickshaw_graph"></div>
            </div>
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="roundede overflow-hidden">
              <div class="pd-x-20 pd-t-20 d-flex align-items-center quarto">
                <i class="fa fa-balance-scale tx-60 lh-0 tx-color op-7"></i>
                <div class="mg-l-20">
                  <p class=" tx-spacing-1 tx-mont tx-semibold tx-uppercase tx-white-8 mg-b-10">Saída</p>
                  <p class="tx-24 tx-black tx-lato tx-bold mg-b-0 lh-1">{{number_format($saida, 2 )}} Kz</p>
                </div>
              </div>
              <div class="ht-50 tr-y-1 rickshaw_graph"></div>
            </div>
          </div><!-- col-3 -->
        </div>


            
                 
         
                
            
    
     
      <pagina tamanho="12">
        <painel titulo="Movimentos" cor="moviment-das">
          <tabela_lista v-bind:titulos="['#','Data','Valor']" v-bind:itens="{{json_encode($Listaoperacoes)}}" valor="#valor"></tabela_lista>
        </painel>
      </pagina>
   


    
     
        
            
      
            
               
	
		  <!-- ########## END: MAIN PANEL ########## -->
	  
		 
		
		
</div>
</div>





			

@endcan

@can('acad')

<div class="site">
		@include('layouts.menu')
		<div class="base-geral">
			
        <div class="caixa">
			<h2 class="titulo"><span class="case"><i class="ico duvida"></i>Home</span> Seja Bem Vindo</h2>
		</div>

<div class="base-home">
        <div class="rows detalhes py-3">
			<div class="col-4">
				<figure class="caixa">
				<div class="thumb"><a href="/perfil"><img src="http://yetoafrica.com/storage/app/public/{{auth()->user()->foto}}">	</a></div>
					<figcaption>
					<a href="/perfil">	<strong>{{auth()->user()->name}}</strong></a>
							<a href="/perfil">	<small><b>Meu Perfil</b></small></a>
							<a href="/perfil">	<small>{{auth()->user()->email}}</small></a>
					</figcaption>
				</figure>
			</div>
			<div class="col">
				<div class="caixa">
					<i class="ico video"></i>
					<small>CURSOS</small>
					<h3>200</h3>
				</div>
			</div>
			<div class="col">
				<div class="caixa">
					<i class="ico curso"></i>
					<small>SALDO</small>
					<h3>20</h3>
				</div>
			</div>
			<div class="col">
				<div class="caixa">
				<a href="/academia/"><i class="ico exercicio"></i></a>
					<a href="/academia/"><small>FORMADORES</small></a>
					<h3>{{$contaForm}}</h3>
				</div>
			</div>
        </div>
  		</div>
    </div>
@endcan          


@endsection