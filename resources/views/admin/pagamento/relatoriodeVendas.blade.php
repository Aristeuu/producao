@extends('layouts.admin')
@section('content')

		@include('layouts.menu')		
                
             
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
                <p class="tx-10 tx-spacing-1 tx-mont tx-semibold tx-uppercase tx-white-8 mg-b-10">Ganho por dia</p>
                <p class="tx-24 tx-white tx-lato tx-bold mg-b-0 lh-1">{{ number_format($ganho_dia, 2) }} Kz</p>
                <span class="tx-11 tx-roboto tx-white-8"></span>
                </div>
              </div>
              <div id="ch2" class="ht-50 tr-y-1"></div>
              </div>
            </div><!-- col-3 -->            
            </div><!-- row -->
            <br>

          
          <formulario action="{{ route("filtro")}}" method="post" enctype="multipart/form-data" token="{{ csrf_token() }}">
            {{ csrf_field() }}
            <div class="row input-daterange">
              <div class="col-md-4">
                <label>De</label>
                 <input type="date" name="from_date" id="from_date" class="form-control" placeholder="from Date">
               </div>
               <div class="col-md-4">
                 <label>Para</label>
                 <input type="date" name="to_date" id="to_date" class="form-control" placeholder="to Date">
               </div>
               <div class="col-md-4">
                 <button type="submit" name="filtro" id="filtro" class="btn btn-primary">Filtrar</button>
               </div>
            </div>
          </formulario>
            
                
            <pagina tamanho="12">
              <painel>                       
                   <tabela_relatorio v-bind:titulos="['#','Curso','Valor','Data']" v-bind:itens="{{json_encode($listCursos)}}"></tabela_relatorio>


                
             </painel>
           </pagina>
         
          
       
        
         
            
                
          
                
                    </div><!--pagebody -->                   
                       
                                             
                                            
                          
                          
               

        @endsection

    <script type="text/javascript">
     
      </script>   
	
                        
                           
