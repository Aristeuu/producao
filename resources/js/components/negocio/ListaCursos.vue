<template>
  <div>

                                        
                <div class="form-group">
                   <div class="input-group"> <span class="input-group-btn">
                      <button type="search" class="btn waves-effect waves-light btn-info"><i class="fa fa-search"></i></button>
                      </span>
                        <input type="text" id="example-input1-group2" name="example-input1-group2" v-model="buscar" class="form-control" placeholder="Buscar"> </div>
                                           
                                         
                        </div>
 <div class="row pt-5 m-auto" >                                 
    <div class="col-md-6 col-lg-3 pb-3"   v-for="(item,index) in lista" >
      <div class="card card-custom bg-white border-white border-0">
              <img class="card-img-top img-fluid" :src="'http://localhost/yetoafrica/storage/app/public/'+item.curso_img">   
      
                            <div class="card-body">
                                <h4 class="card-text">{{item.curso_nome}}</h4>
                               <h4 class="card-title">{{item.curso_preco}} KZ</h4>
                               <p class="card-text" v-if="categoria">Categoria: {{item.cat_nome}}</p>
                               <p class="card-text" v-if="item.id_coprodutor==id">Coprodutor <br>{{item.coprod_percent}}%</p>
                               <p class="card-text" v-else>Produtor</p>
                          
                                <div class="card-footer" style="background: inherit; border-color: inherit;" v-if="item.id_coprodutor!=id" >
    
                                  <a v-if="ver" v-bind:href="ver+item.id" class="btn btn-outline-primary"><i class="fa fa-eye"></i>Detalhe</a>
                                  <modal_link v-if="modal" v-bind:item="item" v-bind:url="editar" nome="formEditar" tipo="button"  titulo="editar" clas="fa fa-edit"></modal_link>
                                  <a v-if="editar && !modal" v-bind:item="item"   v-bind:href="editar"  class="btn btn-success"><i class="fa fa-edit"></i> editar </a>
                            </div>  
                             </div>  



    </div>
 </div>


</div>
  </div>

</template>

<script  type="application/javascript">
    export default {
      props:['titulos','itens','ordem','ordemcol','ver','token','modal','editar','categoria','id'],
      data: function(){
        return {
          buscar:'',
          ordemAux: this.ordem || "desc",
          ordemAuxCol: this.ordemcol || 0
        }
      },
      methods:{
        executaForm: function(index){
          document.getElementById(index).submit();
        },
        ordenaColuna: function(coluna){
          this.ordemAuxCol = coluna;
          if(this.ordemAux.toLowerCase() == "asc"){
            this.ordemAux = 'desc';
          }else{
            this.ordemAux = 'asc';
          }
        }
      },
      filters: {
        formataData: function(valor){
          if(!valor) return '';
          valor = valor.toString();
          if(valor.split('-').length == 3){
            valor = valor.split('-');
            return valor[2] + '/' + valor[1]+ '/' + valor[0];
          }

          return valor;
        }
      },
      computed:{
        lista:function(){
          let lista = this.itens.data;
          let ordem = this.ordemAux;
          let ordemCol = this.ordemAuxCol;
          ordem = ordem.toLowerCase();
          ordemCol = parseInt(ordemCol);

          if(ordem == "asc"){
            lista.sort(function(a,b){
              if (Object.values(a)[ordemCol] > Object.values(b)[ordemCol] ) { return 1;}
              if (Object.values(a)[ordemCol] < Object.values(b)[ordemCol] ) { return -1;}
              return 0;
            });
          }else{
            lista.sort(function(a,b){
              if (Object.values(a)[ordemCol] < Object.values(b)[ordemCol] ) { return 1;}
              if (Object.values(a)[ordemCol] > Object.values(b)[ordemCol] ) { return -1;}
              return 0;
            });
          }

          if(this.buscar){
            return lista.filter(res => {
              res = Object.values(res);
              for(let k = 0;k < res.length; k++){
                if((res[k] + "").toLowerCase().indexOf(this.buscar.toLowerCase()) >= 0){
                  return true;
                }
              }
              return false;

            });
          }


          return lista;
        }
      }
    }
</script>


<style>
.card-custom {
  overflow: hidden;
  min-height: 450px;
  box-shadow: 0 0 6px rgba(10, 10, 10, 0.3);
}

.card-body p{
 
    color: teal;
    font-size:1.3em;
  }

.card-text{
 
    color: #212529;
    
  }


.card-footer {
    padding: 0.75rem 0.2rem;
    background-color: rgba(0, 0, 0, 0.03);
    border-top: 1px solid rgba(0, 0, 0, 0.125);
}






</style>