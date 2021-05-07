@extends('layouts.admin')

@section('content')

		@include('layouts.menu')
	    
	    <div class=" br-pagebody editarcurso">
       <cursoss v-bind:titulos="['']"

      v-bind:itens="{{json_encode($listMeuscursos)}}"

      ver="formaform/"
      modal="modal"
      editar="update/"
      token="{{ csrf_token() }}"
      categoria="Categoria"
      :id="{{json_encode($id_formador)}}"
    

       ></cursoss>
       <modal nome="formEditar" titulo="Editar Curso">
          
         <formulario id="formEditar" v-bind:action="'update/' + $store.state.item.id" method="post" enctype="multipart/form-data" token="{{ csrf_token() }}">  
           {{ csrf_field() }}       

           <div class="row">               
              <div class="col col-md-12">
                  <div class="form-group">
                      <label for="specialidade" class="control-label">Fotografia: </label> 
                      <input type="file" class="form-control has-feedback-left" id="inputSuccess2" placeholder="Design" id="curso_img" name="curso_img">
                  
                  </div>
             </div>      
          </div>
             <div class="row">
                 <div class="col col-md-6">
                   <div class="form-group">
                     <label>Curso:</label>      
                   <input type="text" name="curso_nome" class="form-control has-feedback-left" v-model="$store.state.item.curso_nome">
                 </div>
                 </div> 
                 <div class="col col-md-6">
                   <div class="form-group">
                    <label>Preço:</label> 
                  <input type="text" class="form-control has-feedback-left" name="curso_preco" v-model="$store.state.item.curso_preco">
                   </div>
                 </div>
             </div>              
           
           <div class="row">
             <div class="col col-md-6">
               <div class="form-group">
                   <label for=  "titulo" class="control-label">Categoria</label>
                   <select  name="categoria_id" class="form-control">
                    @foreach($listaCategoria as $lista)
                         <option value="{{$lista->id}}">{{$lista->cat_nome}}</option>
                    @endforeach	                 
                   </select>
           
                </div>  
             </div>
             <div class="col col-md-6">
               <div class="form-group">
                 <label>Duração: </label>
               <input type="text" name="curso_duracao" class="form-control has-feedback-left" v-model="$store.state.item.curso_duracao">
             </div>
             </div>
           </div>
           <div class="row">
             <div class="col col-md-12">
               <div class="form-group">
                 <label>Video Promo: </label>
                    <input type="text" name="curso_link" class="form-control has-feedback-left" v-model="$store.state.item.curso_link">                 
               </div>
             </div>                       
             
           </div>  
           <div class="row">
             <div class="col col-md-12">
                 <div class="form-group">
                   <label>Descrição</label>                                          
                       <ckeditor  name="curso_descricao"  id="curso_desci"  v-bind:config="{
                         toolbar: [
                           [ 'Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript' ]
                         ],
                         height: 200
                       }" v-model="$store.state.item.curso_descricao"></ckeditor>
                 </div>
             </div>
           </div> 
          
               <div class="botn-geral">
                     <input type="submit" value="Enviar" class="btn btn-teal active btn-block mg-b-10"  name="Cadastrar">
                    </div>                                       
       </formulario>
        <span slot="botoes">
          <input form="formEditar" type="submit" value="Enviar" class="btn btn-info" name="Cadatrar">                     
        </span>
          </modal> 	       
          
         
          
         </div>  
   

@endsection
