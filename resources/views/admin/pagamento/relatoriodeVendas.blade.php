@extends('layouts.admin')
@section('content')

    @include('layouts.menu')	
    
      <div class="br-pagebody">	
       <div class="br-section-wrapper">          
          <div class="container">

             
            <div class="br-pagebody dashboard">
                 
                    
          <div class="row row-sm">
            <div class="col-sm-11 col-xl-4">
				  <div class=" roundede overflow-hidden">
					<div class="pd-x-20 pd-t-20 d-flex align-items-center primeiro">
					  <i class="fa fa-balance-scale tx-40 lh-0 tx-whitee op-7"></i>
					  <div class="mg-l-20">
						<p class="tx-10 tx-spacing-1 tx-mont tx-semibold tx-uppercase tx-white-8 mg-b-10">Saldo contabilístico</p>
						<p class="tx-24 tx-white tx-lato tx-bold mg-b-0 lh-1">{{number_format($saldoContabilistico, 2) }} Kz</p>
						<span class="tx-11 tx-roboto tx-white-8"></span>
					  </div>
					</div>
					<div  class="ht-50 tr-y-1"></div>
				  </div>
				</div><!-- col-3 -->
            <div class="col-sm-11 col-xl-4 mg-t-20 mg-sm-t-0">
				  <div class=" roundede overflow-hidden">
					<div class="pd-x-20 pd-t-20 d-flex align-items-center segundo">
					  <i class="fa fa-balance-scale tx-40 lh-0 tx-whitee op-7"></i>
					  <div class="mg-l-20">
						<p class="tx-10 tx-spacing-1 tx-mont tx-semibold tx-uppercase tx-white-8 mg-b-10">Saldo disponível</p>
						<p class="tx-24 tx-white tx-lato tx-bold mg-b-0 lh-1">{{number_format($saldoDisponivel, 2) }} Kz</p>
						<span class="tx-11 tx-roboto tx-white-8"></span>
					  </div>
					</div>
					<div  class="ht-50 tr-y-1"></div>
				  </div>
        </div><!-- col-3 -->
        <div class="col-sm-11 col-xl-4 mg-t-20 mg-xl-t-0">
				  <div class=" roundede overflow-hidden">
					<div class="pd-x-20 pd-t-20 d-flex align-items-center quarto">
					  <i class="fa fa-balance-scale tx-40 lh-0 tx-whitee op-7"></i>
					  <div class="mg-l-20">
						<p class="tx-10 tx-spacing-1 tx-mont tx-semibold tx-uppercase tx-white-8 mg-b-10">Ganho por dia</p>
						<p class="tx-24 tx-white tx-lato tx-bold mg-b-0 lh-1">{{ number_format($ganho_dia, 2) }} Kz</p>
						<span class="tx-11 tx-roboto tx-white-8"></span>
					  </div>
					</div>
					<div  class="ht-50 tr-y-1"></div>
				  </div>
				</div><!-- col-3 -->



              
            </div><!-- row -->
            <br>

          
          <formulario action="{{ route("filtro")}}" method="post" enctype="multipart/form-data" token="{{ csrf_token() }}">
            {{ csrf_field() }}
            <div class="row input-daterange">
              <div class="col-md-4">
                <label>De</label>
                 <input type="date" name="from_date" id="from_date" class="form-control" placeholder="from Date" required>
               </div>
               <div class="col-md-4">
                 <label>Para</label>
                 <input type="date" name="to_date" id="to_date" class="form-control" placeholder="to Date" required>
               </div>
               <div class="col-md-4" style="top:1.4rem;">
              
                 <button type="submit" name="filtro" id="filtro" class="btn btn-teal btn-block mg-b-10" style="width:60%;"> <label>Filtrar</label></button>
               </div>
            </div>
          </formulario>
            
                
     
      <pagina tamanho="12">
        <painel>
          @if ($alunosCurso->isNotEmpty())
        <Aluno_lista v-bind:titulos="['#','Foto','Nome','EMAIL','CURSO','VALOR','DATA','STATUS']" v-bind:itens="{{json_encode($alunosCurso)}}" 
        
          v-bind:tipo="{{json_encode($id_formador)}}"
        foto="{{$src}}"
        ></Aluno_lista> 
          @else
          <div class="col-xl-6">
            <div class="alert alert-info alert-solid" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <div class="d-flex align-items-center justify-content-start">
                <i class="icon ion-ios-information alert-icon tx-32 mg-t-5 mg-xs-t-0"></i>
                <span><strong>Sem Registos!</strong></span>
              </div><!-- d-flex -->
            </div>
          </div><!-- col-xl-6 -->
          @endif         
          
         
        </painel>
      </pagina>
            
         
          
       
      
         
     
                
          
                
                    </div><!--pagebody -->                   
                       
                                             
          </div>
             </div>
                   </div>
                                            
                          
                          
               

        @endsection

    <script type="text/javascript">
     
      </script>   
	
                        
                           
