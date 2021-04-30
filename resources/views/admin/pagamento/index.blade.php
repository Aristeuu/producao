@extends('layouts.admin')

@section('content')
		@include('layouts.menu')
		
		<div class=" br-pagebody-pagamento">

		<div class="mg-t-20 mg-lg-t-0">
            <div class="card bd-0 shadow-base widget-15 ht-100p">
              <div class="card-body">
                <div class="card-title">*A validação do pagamento do curso inicia 24h após a sua
                                efetivação</div>
               

                

                <div class="form-group" action="{{route('pagamentos.store')}}" method="post" enctype="multipart/form-data" token="{{ csrf_token() }}">  
    {{ csrf_field() }}
    <input type="hidden" id="pedido_id" name="pedido_id" value="{{$compras[0]->pedido_id}}">
    <input type="hidden" id="cursoId" name="curso_id" value="{{$compras[0]->curso_id}}">
	<input type="hidden" id="cursoId" name="id" value="{{$compras[0]->id}}">
	
                  <label class="form-control-label">Curso: {{$curso->curso_nome}} </label>
                  <input type="text" for="name"  class="form-control">
                </div><!-- form-group -->

                <div class="form-group">
                  <label class="form-control-label">Preço: {{$curso->curso_preco}} kz </label>
                  <input type="text" for="name" class="form-control">
                </div><!-- form-group -->
	<div class="card-title">Formas de Pagamento</div>

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
        

                <p class="mg-b-0 mg-t-20">
                  <label class="ckbox">
                    <input type="checkbox" checked="">
                    <span></span>
                  </label>
                </p>
              </div><!-- card-body -->
              <div class="card-footer mg-t-auto">
                <button class="btn btn-info bd-0 btn-oblong">Submit</button>
                <button class="btn btn-secondary bg-gray-400 bd-0 btn-oblong mg-l-5">Cancel</button>
              </div><!-- card-footer -->
            </div><!-- card -->
		  </div>
		  </div>




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