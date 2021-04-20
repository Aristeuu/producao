@extends('layouts.admin')
@section('content')

		@include('layouts.menu')
		<div class="tab-content br-profile-body">
            <div class="tab-pane fade active show" id="posts">
                
                <div class="row">
                    <div class="col-lg-12">
                     <div class="media-list bg-white rounded shadow-base">
                         <div class="row">
                      <table class="table table-striped">
	                             <thead>
                                    <tr>
                                    <th>#</th>
                                    <th>Nome</th>
                                    <th>Email</th>
                                    <th>Curso</th>
                                   
                                     </tr>
                                       </thead>
                                 <tbody>
                                        <tr>
                                    
                                    @foreach ($alunosCurso as $aluno_curso)                                                
                                                                                                                       
                                        

                                            <td>{{$aluno_curso->id}}</td> 
                                            <td>{{$aluno_curso->name}}</td>
                                            <td>{{$aluno_curso->email}}</td>
                                            <td>{{$aluno_curso->curso_nome}}</td>
                                         
                                    @endforeach
                                     </tr>
                                              </tbody>
                                            
                                   
                                    
                                                          
                                            </table>
                                        </div>    
                                             
                                             @endsection
                                </div> 
                            </div>    
                            </div>   
                            
                    
            </div>
        </div>    
	
                        
                           
