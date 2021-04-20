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


 
      <div class="tab-content br-profile-body">
        <div class="tab-pane fade active show" id="posts">
          <div class="row">
            <div class="col-lg-12">
              <div class="media-list bg-white rounded shadow-base">
                  <div class="br-pagetitle">
                    <div>
                      @php
                           
                      @endphp
                          <div >
                            <modal_link tipo="button" nome="adicionar" titulo="Novo curso"></modal_link>
                           @if($saldoContabilistico != 0 || $saldoContabilistico != null )
                           <modal_link tipo="button" nome="solicitar" titulo="Solicitar Valores"></modal_link>
                              @else                             
                                                                                                                        
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
                    <div class="row">
                      <div class="col col-md-12">
                          <div class="form-group">
                              <label for="specialidade" class="control-label" style="margin-top:2rem;">Fotografia: </label> 
                              <input type="file" class="form-control has-feedback-left" id="inputSuccess2" placeholder="Design" id="curso_img" name="curso_img" required >
                            
                          </div>
                      </div>
                
                   
                    </div> 
                    <div class="row">                                   
                        <div class="col col-md-6">
                            <div class="form-group">
                                <label for="name" class="control-label">Curso: </label> 
                                <input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="Informática" name="curso_nome"  required>
                            
                            </div>
                        </div>
                
                        <div class="col col-md-6">
                            <div class="form-group">
                                <label for="titulo" class="control-label">Categoria</label>
                                <select  name="categoria_id" class="form-control">                                
                                  @foreach($listaCategoria as $lista)
                                  <option value="{{$lista->id}}">{{$lista->cat_nome}}</option>
                                  @endforeach						
                                </select>                        
                             </div>  
                        </div>
                
                    </div>
                    <div class="row">
                        <div class="col col-md-6">
                            <div class="form-group">
                                <label for="name" class="control-label">Preço: </label> 
                               <input type="float" class="form-control has-feedback-left" id="inputSuccess2" placeholder="Preço" name="curso_preco"  required>
                            </div>
                        </div>                
                        <div class="col col-md-6">
                            <div class="form-group">
                                <label for="specialidade" class="control-label">Duração: </label> 
                                <input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="30 dias" id="curso_duracao" name="curso_duracao"  >
                               
                            </div>
                        </div> 
                     </div>
                   
                    
                      
                    <div class="row">
                     <div class="col col-lg-12">
                        <div class="form-group"> 
                          <label for="email" class="control-label">Descrição</label>
                          <ckeditor  name="curso_descricao"  id="curso_desci"  v-bind:config="{
                              toolbar: [
                                [ 'Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript' ]
                              ],
                              height: 200
                            }">
                          </ckeditor>                
                        </div>
                      </div>
                     </div>
                     
                     <div class="row">
                      <div class="col col-lg-12">
                          <div class="form-group"> 
                            <label for="curso_link" class="control-label">Vídeo Promocional</label>
                              <input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="Link" id="curso_link" name="curso_link"  >
                          </div>
                       </div>                       
                     </div>             
                   
                  </formulario>
                  <span slot="botoes">
                    <input type="submit" value="Enviar" class="btn btn-info"  name="Cadastrar">
                  </span>
                </modal>
                <!--end Modal's-->

                <!--Modal-->
                <modal nome="solicitar" titulo="">
                  <h4 class="lh-3 mg-b-20"><a href="" class="tx-inverse hover-primary">Saldo disponível: {{number_format($saldoDisponivel)}} Kz</a></h4>
                  <formulario  id="formSolicitar" action="{{route('operacoes.store')}}" method="post" enctype="multipart/form-data" token="{{ csrf_token() }}">
                    {{ csrf_field() }}
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
                  </formulario>
                  <span slot="botoes">
                    <button form="formSolicitar" type="submit" class="btn btn-primary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium">Enviar</button>
                  </span>                
                </modal>

              <!--end Modal's-->
                <modal nome="bankdata">
                  <formulario id="formBanco" action="{{route('formador.bancodata')}}" method="post" enctype="multipart/form-data" token="{{ csrf_token() }}">
                    {{ csrf_field() }}
                    
                      <div class="row">
                        <div class="col col-lg-12">
                          <div class="form-group">
                              <label>Nº da Conta</label>
                              <input class="form-control" type="text" name="conta_bancaria" required placeholder="Conta_Bancária">
                          </div>
                        </div>
                      </div> 
                  
                      <div class="row">                        
                        <div class="col col-lg-12">
                        <div class="form-group">
                          <label>IBAN</label>
                          <input class="form-control" type="text" name="iban" required placeholder="IBAN">
                        </div>
                        </div>  
                      </div>  
                  
                      <div class="row">
                        <div class="col col-lg-12">
                          <div class="form-group">
                            <label>Titular</label>
                          <input class="form-control" type="text" name="titular" required placeholder="Titular">
                          </div>
                        </div>
                      </div> 
                           
                 <input class="form-control" type="hidden" name="id_formador" value={{$id_formador}}>

                  </formulario>
                  <span slot="botoes">
                    <button form="formBanco" type="submit" class="btn btn-primary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium">Enviar</button>
                  </span>
                </modal>

            <div class="br-pagebody">
                 
                    
          <div class="row row-sm">
				<div class="col-sm-6 col-xl-3">
				  <div class="bg-info rounded overflow-hidden">
					<div class="pd-x-20 pd-t-20 d-flex align-items-center">
					  <i class="ion ion-earth tx-40 lh-0 tx-white op-7"></i>
					  <div class="mg-l-20">
						<p class="tx-10 tx-spacing-1 tx-mont tx-semibold tx-uppercase tx-white-8 mg-b-10">Saldo contabilístico</p>
						<p class="tx-24 tx-white tx-lato tx-bold mg-b-0 lh-1">{{number_format($saldoContabilistico, 2) }} Kz</p>
						<span class="tx-11 tx-roboto tx-white-8"></span>
					  </div>
					</div>
					<div id="ch1" class="ht-50 tr-y-1"></div>
				  </div>
				</div><!-- col-3 -->
				<div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
				  <div class="bg-purple rounded overflow-hidden">
					<div class="pd-x-20 pd-t-20 d-flex align-items-center">
					  <i class="ion ion-bag tx-40 lh-0 tx-white op-7"></i>
					  <div class="mg-l-20">
						<p class="tx-10 tx-spacing-1 tx-mont tx-semibold tx-uppercase tx-white-8 mg-b-10">Saldo disponível</p>
						<p class="tx-24 tx-white tx-lato tx-bold mg-b-0 lh-1">{{number_format($saldoDisponivel, 2) }} Kz</p>
						<span class="tx-11 tx-roboto tx-white-8"></span>
					  </div>
					</div>
					<div id="ch3" class="ht-50 tr-y-1"></div>
				  </div>
				</div><!-- col-3 -->
				<div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
				  <div class="bg-teal rounded overflow-hidden">
					<div class="pd-x-20 pd-t-20 d-flex align-items-center">
					  <i class="ion ion-monitor tx-40 lh-0 tx-white op-7"></i>
					  <div class="mg-l-20">
						<p class="tx-10 tx-spacing-1 tx-mont tx-semibold tx-uppercase tx-white-8 mg-b-10">Entrada</p>
						<p class="tx-24 tx-white tx-lato tx-bold mg-b-0 lh-1">{{ number_format($entrada, 2) }} Kz</p>
						<span class="tx-11 tx-roboto tx-white-8"></span>
					  </div>
					</div>
					<div id="ch2" class="ht-50 tr-y-1"></div>
				  </div>
				</div><!-- col-3 -->
				<div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
				  <div class="bg-primary rounded overflow-hidden">
					<div class="pd-x-20 pd-t-20 d-flex align-items-center">
					  <i class="ion ion-clock tx-40 lh-0 tx-white op-7"></i>
					  <div class="mg-l-20">
						<p class="tx-10 tx-spacing-1 tx-mont tx-semibold tx-uppercase tx-white-8 mg-b-10">Saída</p>
						<p class="tx-24 tx-white tx-lato tx-bold mg-b-0 lh-1">{{number_format($saida, 2 )}} Kz</p>
						<span class="tx-11 tx-roboto tx-white-8"></span>
					  </div>
					</div>
					<div id="ch4" class="ht-50 tr-y-1"></div>
				  </div>
				</div><!-- col-3 -->
			  </div><!-- row -->
                
            
    
     
      <pagina tamanho="12">
        <painel titulo="Sua Carteira" cor="">
          <tabela_lista v-bind:titulos="['#','Data','Valor']" v-bind:itens="{{json_encode($Listaoperacoes)}}" valor="#valor"></tabela_lista>
        </painel>
      </pagina>
   
    
     
        
            
      
            
                </div><!--pagebody -->
                
              </div><!-- card -->

              <!--div class="bg-white pd-y-12 tx-center mg-t-15 mg-xs-t-30 shadow-base rounded">
                <a href="" class="tx-gray-600 hover-info">Load more</a>
                
                
          </div--><!-- bd -->
                
                
                
              </div>
            </div><!-- col-lg-8 -->
            
        
			  


        
        <!-- BASIC MODAL -->
          <div id="modalbancario" class="modal fade">
            <div class="modal-dialog modal-dialog-centered" role="document">
            <form action="{{route('formador.bancodata')}}" method="post" enctype="multipart/form-data" token="{{ csrf_token() }}">
                 {{ csrf_field() }}
              <div class="modal-content bd-0 tx-14">
                <div class="modal-header pd-y-20 pd-x-25">
                  <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Adicionando Dados Bancários</h6>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body pd-25">
                  <h4 class="lh-3 mg-b-20"><a href="" class="tx-inverse hover-primary">Adiciona os seus dados bancários para nos ajudar a efectuar o seu pagamento</a></h4>
                    <div class="input-group">
                        <p><input class="form-control" type="text" name="conta_bancaria" required placeholder="Conta_Bancária"><br></p>
                    </div>
                    <div class="input-group">
                        <p><input class="form-control" type="text" name="iban" required placeholder="IBAN"><br></p>
                    </div>
                    <div class="input-group">
                        <p><input class="form-control" type="text" name="titular" required placeholder="Titular"><br></p>
                    </div>
                    
                  <p class="mg-b-5"> </p>
                   <input class="form-control" type="hidden" name="id_formador" value={{$id_formador}}>
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
    </div>
	 <div class="br-mainpanel">
      

			<footer class="br-footer">
			  <div class="footer-left">
				<div class="mg-b-2">Copyright &copy; 2020. Yetoáfrica. All Rights Reserved.</div>
			  </div>
			  <div class="footer-right d-flex align-items-center">
				<span class="tx-uppercase mg-r-10">Partilhar:</span>
				<a target="_blank" class="pd-x-5" href="https://www.facebook.com/yetoafrica?fref=mentions"><i class="fab fa-facebook tx-20"></i></a>
				<a target="_blank" class="pd-x-5" href="https://www.instagram.com/yetoafrica/"><i class="fab fa-instagram tx-20"></i></a>
			  </div>
			</footer>
		  </div><!-- br-mainpanel -->
		  <!-- ########## END: MAIN PANEL ########## -->
	  
		 
		  <script>
			$(function(){
			  'use strict'
	  
			  // FOR DEMO ONLY
			  // menu collapsed by default during first page load or refresh with screen
			  // having a size between 992px and 1299px. This is intended on this page only
			  // for better viewing of widgets demo.
			  $(window).resize(function(){
				minimizeMenu();
			  });
	  
			  minimizeMenu();
	  
			  function minimizeMenu() {
				if(window.matchMedia('(min-width: 992px)').matches && window.matchMedia('(max-width: 1299px)').matches) {
				  // show only the icons and hide left menu label by default
				  $('.menu-item-label,.menu-item-arrow').addClass('op-lg-0-force d-lg-none');
				  $('body').addClass('collapsed-menu');
				  $('.show-sub + .br-menu-sub').slideUp();
				} else if(window.matchMedia('(min-width: 1300px)').matches && !$('body').hasClass('collapsed-menu')) {
				  $('.menu-item-label,.menu-item-arrow').removeClass('op-lg-0-force d-lg-none');
				  $('body').removeClass('collapsed-menu');
				  $('.show-sub + .br-menu-sub').slideDown();
				}
			  }
			});
		  </script>
	
		
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