@extends('layouts.admin')
    
        @section('content')
  
    
            @can('eAdmin')
                <div class="site">
                  
                     <br><br><br><br><br>
                    <div class="base-geral">
                        
                        
                        

                        <table class="table">	
                            <tr>	
                            
                            
                        
                            <th>#</th>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Telefone</th>
                            
                            
                        
                            
                            
                            </tr>

                        @foreach ($alunos as $aluno)

                           <tr>                                                            
                                    <td>{{$aluno->id_user}}</td>  
                                    <td><a href="/admin/relatorios/alunos/{{{$aluno->id_user}}}">{{$aluno->name}}</a></td>                                
                                    <td>{{$aluno->email}}</td>
                                     <td>{{$aluno->telefone}}</td>
                                
                            </tr>
                        @endforeach
                        
                        

                    </table>
                    {!! $alunos->links() !!}
                    </div>
    
    
    
                </div>
    
            @endcan
        @endsection
    