@extends('layouts.admin')
@section('content')

        @include('layouts.menu')
        
                
		<div class="tab-content br-profile-body">
            <div class="tab-pane fade active show" id="posts">
                
                <div class="row">
                    <div class="col-lg-12">
                     <div class="media-list bg-white rounded shadow-base">
                         <div class="row">
                         
                                        
                                            
                                        <pagina tamanho="12">
                                            <painel titulo="" cor="moviment-das">
                                                <Aluno_lista v-bind:titulos="['#','Foto','Nome','EMAIL','CURSO','VALOR','STATUS']" v-bind:itens="{{json_encode($alunosCurso)}}"></Aluno_lista>
                                            </painel>    
                                        </pagina>     
                        </div>    
                                             
                                           
                                </div> 
                            </div>    
                            </div>   
                            
                    
            </div>
        </div> 
        @endsection   
	
                        
                           
