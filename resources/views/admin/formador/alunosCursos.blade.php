@extends('layouts.admin')
@section('content')

        @include('layouts.menu')
        
                
		
           
                    
                         
                                        
                                            
                                        <pagina tamanho="12">
                                            <painel titulo="" cor="moviment-das">
                                                <Aluno_lista v-bind:titulos="['#','Foto','Nome','EMAIL','CURSO','VALOR','STATUS']" v-bind:itens="{{json_encode($alunosCurso)}}"></Aluno_lista>
                                            </painel>    
                                        </pagina>     
                        
                         
        @endsection   
	
                        
                           
