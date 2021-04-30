@extends('layouts.admin')

@section('content')

@can('est')

@include('layouts.menu')
     
 <div class="cursos-aluno">
<div class="container-fluid">

        <div class="row row-cols-1 row-cols-md-3 g-4">
                   
 @forelse ($compras as $pedido)

@foreach ($pedido->pedido_cursos_itens as $pedido_curso)

    <div class="col-md-3 col-sm-6">   
         <div class="card " >
            <img src="http://localhost/producao/storage/app/public/{{ $pedido_curso->curso->curso_img }}" class="card-img-top" alt="...">
            <div class="card-body">
            <p class="card-text">{{$pedido_curso->curso->curso_nome}}</p>

            <div class="progress mg-b-20">
            <div class="progress-bar progress-bar-striped wd-25p bg-info" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>

           <div class="btnc-aluno">
              <button class="btn btn-outline-info active "><a href="/aulaestudante/{{$pedido_curso->curso->id}}">ver</a></button>
              <button class="btn btn-outline-warning active "><a href="/pagamento/{{$pedido_curso->curso_id}}">pagar</a></button>
           </div>

            </div>
            </div>

            </div>
                                            
                                   
                                  
                               
 @endforeach

                    @empty
                    @if ($cancelados->count() > 0)
                        Neste momento não há nenhuma compra valida.
                    @else
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <div class="col-md-3 col-sm-6" style="text-align:center">
                            <p>Você ainda não fez nenhuma compra.</p><br><br>
                        </div>
                    </div>    
                     
                        @foreach($listaCursos as $curso)
                            
                       
                      <div class="col-md-3 col-sm-6">
                         
                               
                              <a href="/detalhes/{{base64_encode($curso->id)}}"><img src="http://producao.yetoafrica.com/storage/app/public/{{$curso->curso_img}}" class="card-img-top" alt="..." /></a>
                                        
                                   
                                        <div class="del-curso">
                                            <h5>
                                            {{$curso->curso_nome}}</h5>
                                            <h5 class="price-text-color">
                                            {{ number_format($curso->curso_preco, 2, ',', '.') }} AKZ</h5>
                                        </div>
                                            <form method="POST" action="{{ route('carrinho.adicionar') }}">
                                                    {{ csrf_field() }}
                                                <input type="hidden" name="id" value="{{ $curso->id }}">
                                                <p class="btn-add">
                                                <button class="btn btn-outline-warning active" data-position="bottom" data-delay="50" data-tooltip="O curso será adicionado ao seu carrinho"><i class="fa fa-shopping-cart"> </i> Adicionar</button>   
                                                </p>
                                             </form>
                                                
                                                    
                                           <p class="btn-details">
                                               <button class="btn btn-outline-warning active"> <a href="/detalhes/{{base64_encode($curso->id)}}" > Descrição</a></button>
                                  
                                            </p>
                                       
                               
                              
                               
                               
                            
                                
                             </div>
                            
                        @endforeach
                        
                       
                        
                    @endif
                    @endforelse


        
        
   </div>
       </div> 
       </div>
                                
@endcan


@endsection