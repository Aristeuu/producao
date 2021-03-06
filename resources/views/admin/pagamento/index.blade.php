@extends('layouts.admin')

@section('content')
		@include('layouts.menu')
		
		<div class=" br-pagebody-pagamento">

		<div class="mg-t-20 mg-lg-t-0">
            <div class="card bd-0 shadow-base widget-15 ht-100p">
              <div class="card-body">
                <div class="card-title">*A validação do pagamento do curso inicia 24h após a sua
								efetivação
				</div>
				
				
				<div class="listapgamento">
					<ul>
						<li>Curso: {{$curso->curso_nome}}</li>
						<li>Preço: {{$curso->curso_preco}} kz </li>
						<li>Categoria: {{$categoria[0]->cat_nome}}</li>
					</ul>
				</div>
                
				<formulario action="{{route('pagamentos.store')}}" method="post" enctype="multipart/form-data" token="{{ csrf_token() }}">
					{{ csrf_field() }}
					<div class="form-group">  
						<input type="hidden" id="pedido_id" name="pedido_id" value="{{$compras[0]->pedido_id}}">
						<input type="hidden" id="cursoId" name="curso_id" value="{{$compras[0]->curso_id}}">
						<input type="hidden" id="cursoId" name="id" value="{{$compras[0]->id}}">				                 		
                 	
                	</div><!-- form-group -->

              	   <div class="form-group">
                    
                   </div><!-- form-group -->
	            <div class="text-form">Formas de Pagamento</div>

					<div class="radio_tabs">
						<label class="radio_wrap" data-radio="radio_1">
							<input type="radio" name="sports" class="input" checked>
							<span class="radio_mark">
							Transferência Bancária
							</span>
						</label>
						<label class="radio_wrap" data-radio="radio_2">
							<input type="radio" name="sports" class="input">
							<span class="radio_mark">
							Whatsapp
							</span>
						</label>
					
					</div>
					<div class="content">
						<div class="radio_content radio_1">
							 kononia Digital LDA
							<p>IBAN: AO06.0040.0000.0407.5121.1011.1</p>
							<p>SWIFT:BAIPAOLU</p>
							
							
							<div class="row">
								<div class="col col-md-12">
									<div class="form-group">
										<label for="specialidade" class="control-label">Comprovante: </label> 
										<input type="file" class="form-control has-feedback-left" id="inputSuccess2" placeholder="" id="curso_img" name="curso_comprovativo"  required>
							   
									 </div>
								</div>
				
				   
							</div>
							<div class="row">
				  
								<div class="col-lg-12">
									<input type="submit" value="Enviar" class="btn btn-info" name="Cadastrar">
								</div>
							</div>
							
						</div>
						<div class="radio_content radio_2">
						 <button type="button" class="btn btn-success"><a href="https://api.whatsapp.com/send?l=pt-BR&phone=244938535602&text=Conversa%20via%20WhatsApp" class="icon-whatsapp" target="_blank"><i class="fab fa-whatsapp"></i>Finalizar compra</a></button>
						
						
					</div>
					</div>				
        

                
              </div><!-- card-body -->             
            </div><!-- card -->
		  </div>
		  </div>
		</formulario>




	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script>
		$(document).ready(function(){
			/* by default hide all radio_content div elements except first element */
			$(".content .radio_content").hide();
			$(".content .radio_content:first-child").show();

			/* when any radio element is clicked, Get the attribute value of that clicked radio element and show the radio_content div element which matches the attribute value and hide the remaining tab content div elements */
			$(".radio_wrap").click(function(){
			  var current_raido = $(this).attr("data-radio");
			  $(".content .radio_content").hide();
			  $("."+current_raido).show();
			})
		});
	</script>


		
	
@endsection