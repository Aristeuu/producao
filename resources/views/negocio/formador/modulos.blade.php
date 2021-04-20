@extends('layouts.admin')

@section('content')
<div class="site">
		@include('layouts.menu')
		<div class="base-geral">
        <div class="caixa">
			<h2 class="titulo"><span class="case"><i class="ico duvida"></i>Módulos</span></h2>
        </div>






<form css="" action="{{route('modulos.store')}}" method="post" enctype="multipart/form-data" token="{{ csrf_token() }}">  
    {{ csrf_field() }}

    <div class="row">
    <div class="col col-md-6">
            <div class="form-group">
                <label for="specialidade" class="control-label">Título: </label> 
                <input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="Design" id="modulo_titulo" name="modulo_titulo" required >
               
            </div>
    </div>

    <div class="col col-md-6">
<div class="form-group">
    <label for="titulo" class="control-label">Curso</label>
    <select  name="id_curso" class="form-control">
     <option value="{{$listaCursos->id}}">{{$listaCursos->curso_nome}}</option>		
    </select>
</div>
    
</div>
</div>

<div class="row">
     <div class="col col-lg-12">
            <div class="form-group"> 
                <label for="email" class="control-label">Descricao</label>
                <ckeditor name="modulo_descricao"  id="modulo_desci"  v-bind:config="{
                    toolbar: [
                      [ 'Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript' ]
                    ],
                    height: 200
                  }" required>
                </ckeditor>
            </div>
    </div>
</div>
    

    <div class="row">
  
    <div class="col-lg-12">
    <input type="submit" value="Enviar" class="btn btn-success" name="Cadastrar">
    </div>
    </div>
    
</form>
</modal>

<modal nome="editar">
    <formulario id="formEditar" v-bind:action="'/modulos/' + $store.state.item.id" method="put" enctype="multipart/form-data" token="{{ csrf_token() }}">
       {{ csrf_field() }}
      
       <div class="row">
    <div class="col col-md-6">
            <div class="form-group">
                <label for="specialidade" class="control-label">Título: </label> 
                <input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="Design" id="modulo_titulo1"  name="modulo_titulo" v-model="$store.state.item.modulo_titulo">
               
            </div>
    </div>

    <div class="col col-md-6">
<div class="form-group">
    <label for="titulo" class="control-label">Seleciona o Curso</label>
    <select  name="id_curso" class="form-control">
    <option value="{{$listaCursos->id}}">{{$listaCursos->curso_nome}}</option>		
    </select>

</div>
    
</div>
</div>


    
    <div class="row">
     <div class="col col-lg-12">
            <div class="form-group"> 
                <label for="email" class="control-label">Descricao</label>
                <ckeditor name="modulo_descricao"  id="modulo_descii" v-model="$store.state.item.modulo_descricao"
              v-bind:config="{
                    toolbar: [
                      [ 'Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript' ]
                    ],
                    height: 200
                  }"
              ></ckeditor> 
            </div>
        </div>
     </div>
    </formulario>
    <span slot="botoes">
      <button form="formEditar" class="btn btn-info">Atualizar</button>
    </span>
  </modal>

  </div>
</div>

@endsection
