@extends('layouts.admin')
    
        @section('content')
   
    
            @can('eAdmin')
                <div class="site">
                    
                    <br><br><br><br>
                    <div class="base-geral">
                        
                        {{$aluno[0]->id}}

                        <div class="rows cursos py-3">
                            <table class="table">

                                <tr>	
                            
                            
                        
                                    <th>#</th>
                                    <th>Nome</th>
                                    <th>Preco</th>
                                    <th>Foto</th>
                                    <th>Data da Operação</th>
                                    <th>Status</th>
                                    <th>Comprovativo</th>

                                    
                                    
                                
                                    
                                    
                                    </tr>
                                    @forelse ($cursosAlunos as $pedido)


                                    

                                    @foreach ($pedido->pedido_cursos_itens as $pedido_curso)                                                
                                                                                                                       
                                        <tr>     

                                            <td>{{$pedido_curso->curso->id}}</td>  
                                            <td>{{$pedido_curso->curso->curso_nome}}</td>                                
                                            <td>{{$pedido_curso->curso->curso_preco}}</td>
                                            <td><img src="http://localhost:/Aristeu/nossafrica/storage/app/public/{{ $pedido_curso->curso->curso_img }}" width="100px"></td>
                                            <td>{{$pedido_curso->curso->created_at}}</td>
                                            
                                        @if($pedido_curso->status=='PE')
                                            <td style="background: lightgray"><label class="btn btn-warning">PENDENTE</label></td>
                                        @endif
                                        
                                        @if($pedido_curso->status=='PA')
                                            <td style="background: lightgray"><label class="btn btn-success">PAGO</label></td>
                                        @endif 
                                        
                                        @if($pedido_curso->status=='RE')
                                            <td style="background: lightgray"><label class="btn btn-info">RESERVADO</label></td>
                                        @endif 
                                        @if($pedido_curso->status=='CA')
                                            <td style="background: lightgray"><label class="btn btn-danger">CANCELADO</label></td>
                                        @endif
                                        
                                        
                                            <td style="background: lightgray">{{$pedido_curso->id}}</td>
                                        </tr>
                                                        
                                                    
                                    @endforeach
                                   
                                    
                                                        @empty                                                        
                                                            Neste momento ainda não fez nenhuma compra.
                                                        
                                                        @endforelse


                            </table>
                            
                            @foreach($pagamento as $pag)
                            
                            id: {{$pag->id}}
                            
                            Comprovante : <a href="http://localhost/yetoafrica/storage/app/public/{{$pag->comprovante}}">{{$pag->id_pedido}}</a>
                            
                            
                            
                            @endforeach
                            
                    
                        </div>

                    </div>
    
    
    
                </div>
    
            @endcan
        @endsection
    