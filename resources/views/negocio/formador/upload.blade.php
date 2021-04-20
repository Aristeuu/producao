@extends('layouts.admin')

@section('content')
<div class="site">
		@include('layouts.menu')
		
        
 





<br>

     

@foreach ($modulos as $modulo)
<div class="caixa">
    <h2 class="titulo"><span class="case"><i class="ico new"></i>{{$modulo->modulo_titulo}}</span>Carrega Aqui a sua aula</h2>    
</div>
<br>
<br>

<form css="" action="{{route('aula.store')}}" method="post" enctype="multipart/form-data" token="{{ csrf_token() }}">  
    {{ csrf_field() }}
     
<input type="hidden" name="modulo_id" id="modulo_id" value="{{$modulo->id}}">
    <div class="row">           
        <div class="col col-md-6">
            <div class="form-group">
                <label for="aula_titulo" class="control-label">Título</label> 
                <input class="form-control" placeholder="Título do Vídeo" type="text" id="aula_titulo" name="aula_titulo" required>
               
            </div>
        </div>

        <div class="col col-md-6">
            <div class="form-group">
                <label for="specialidade" class="control-label">Adicionar Aula</label> 
                <input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="Link da Aula" id="curso_link" name="aula_link" required>
               
            </div>
        </div>



        <!--/////////////////////////////-->
        
        @endforeach
    </div>    
       
     <div class="row">        
                
        <div class="col col-md-6">
            <div class="form-group">
                <label for="aula_titulo" class="control-label">Descrição</label>
                <textarea class="form-control has-feedback-left" id="inputSuccess2" placeholder="Descrição" id="desc_aula" name="aula_descricao" required></textarea>               
               
            </div> 
        </div>

        
        <div class="col col-md-4">
            <div class="form-group">
                <label for="name" class="control-label">Duração:</label> 
                <input type="float" class="form-control has-feedback-left" id="inputSuccess2" placeholder="Duração da Aula" name="aula_duracao"  required>
           </div>   
        </div>
        
    </div>
    <div class="row">        
         
        
        <div class="col col-md-6">
            <div class="form-group">
                <label for="aula_conteudo" class="control-label">Arquivo complementar:</label> 
                <input type="file" class="form-control has-feedback-left" id="inputSuccess2" placeholder="" id="aula_conteudo" name="aula_conteudo"  >
               
            </div>
        </div>     
   
     </div>
    
    <div class="row">
  
    <div class="col-lg-12">
    <input type="submit" value="Enviar" class="btn btn-info" name="Cadastrar">
    </div>
    </div>
    
</form>



<!--/////////////////////////////////Fim///////////////////////////////////////////-->
 

                </div>
</div>
@endsection
