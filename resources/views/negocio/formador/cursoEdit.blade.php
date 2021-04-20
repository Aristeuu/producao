<modal nome="formEditar" titulo="Editar Curso">
    <p>@{{$store.state.item.id}}</p>
     <formulario id="formEditar" action="{{ url('/update/.',  )}}" method="post" enctype="multipart/form-data" token="{{ csrf_token() }}">  
       {{ csrf_field() }}       

         <input type="text" name="" id="" v-model="$store.state.item.id">
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
               <label for="titulo" class="control-label">Categoria</label>
               <select  name="categoria_id" class="form-control">
                 
               </select>
       
            </div>  
         </div>
         <div class="col col-md-4">
           <div class="form-group">
             <label>Duração: </label>
           <input type="text" name="curso_duracao" class="form-control has-feedback-left" v-model="$store.state.item.curso_duracao">
         </div>
         </div>
       </div>
       <div class="row">
         <div class="col col-md-8">
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
                   <input type="text" v-model="$store.state.item.curso_descricao">                        
                   <ckeditor  name="curso_descricao"  id="curso_desci"  v-bind:config="{
                     toolbar: [
                       [ 'Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript' ]
                     ],
                     height: 200
                   }" v-model="$store.state.item.curso_descricao"></ckeditor>
             </div>
         </div>
       </div>

         <div class="row">
           <div class="col col-md-12 c-edit">
                   <div class="form-group">
                       <label for="specialidade" class="control-label">Fotografia: </label> 
                       <input type="file" class="form-control has-feedback-left" id="inputSuccess2" placeholder="Design" id="curso_img" name="curso_img">
                     
                   </div>
           </div>
       
          
         </div>         
   </formulario>  
     <span slot="botoes">
       <input form="formEditar" type="submit" value="Enviar" class="btn btn-info" name="Cadatrar">            
     </span>

      </modal> 

