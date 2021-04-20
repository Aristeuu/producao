@extends('layouts.admin')

@section('content')
<div class="site">
        @include('layouts.menu')
	       
		      <div class="br-mainpanel br-profile-page container" style="width:70rem; height:40rem;margin-top:5rem;">

		<div class=" shadow-base bd-0 rounded-0 widget-4">
		  <div class="card-header ht-75" >
           <h4 class="tx-normal tx-roboto tx-white">Crie o seu curso</h4>
			
		  </div><!-- card-header -->
		  
		</div><!-- card -->
<div style="width:80%;margin-left:7rem;">
<form css="" action="{{route('cursos.store')}}" method="post" enctype="multipart/form-data" token="{{ csrf_token() }}">  
    {{ csrf_field() }}
  
    <input type="hidden" id="custId" name="id_formador" value="{{$listaFormador[0]->id}}">
    <div class="row">
    <div class="col col-md-12">
            <div class="form-group">
                <label for="specialidade" class="control-label" style="margin-top:2rem;">Fotografia: </label> 
                <input type="file" class="form-control has-feedback-left" id="inputSuccess2" placeholder="Design" id="curso_img" name="curso_img" required >
               
            </div>
    </div>

   
    </div> 
    <div class="row">
  
   
        <div class="col col-md-6">
            <div class="form-group">
                <label for="name" class="control-label">Curso: </label> 
                <input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="Informática" name="curso_nome"  required>
            
            </div>
        </div>

        <div class="col col-md-6">
            <div class="form-group">
                <label for="titulo" class="control-label">Categoria</label>
                <select  name="categoria_id" class="form-control">
               
                @foreach($listaCategoria as $lista)
                 <option value="{{$lista->id}}">{{$lista->cat_nome}}</option>
                @endforeach						
				</select>
        
        </div>  
        </div>

    </div>
    <div class="row">
        <div class="col col-md-6">
            <div class="form-group">
                <label for="name" class="control-label">Preço: </label> 
                <input type="float" class="form-control has-feedback-left" id="inputSuccess2" placeholder="Preço" name="curso_preco"  required>
            
            </div>
        </div>

        <div class="col col-md-6">
            <div class="form-group">
                <label for="specialidade" class="control-label">Duração: </label> 
                <input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="30 dias" id="curso_duracao" name="curso_duracao"  >
               
            </div>
    </div> 
        </div>
   
    
      
    <div class="row">
     <div class="col col-lg-12">
            <div class="form-group"> 
                <label for="email" class="control-label">Descrição</label>
                <ckeditor  name="curso_descricao"  id="curso_desci"  v-bind:config="{
                    toolbar: [
                      [ 'Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript' ]
                    ],
                    height: 200
                  }"></ckeditor>
    
            </div>
        </div>
     </div>
     
     <div class="row">
     <div class="col col-lg-12">
            <div class="form-group"> 
                <label for="curso_link" class="control-label">Vídeo Promocional</label>
                 <input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="Link" id="curso_link" name="curso_link"  >
            </div>
        </div>
       
     </div>
    <div class="row">
  
    <div class="col-lg-12">
    <input type="submit" value="Enviar" class="btn btn-info" name="Cadatrar">
    </div>
    </div>
     
</form>
</div>

@endsection