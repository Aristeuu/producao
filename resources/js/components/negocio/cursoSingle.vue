 <template>
  <div>
 
        
            <span class="titulo">FORMAÇÃO DE {{titulos}}</span> 
            <ul>
                <li><i class="ico data"></i><small>DATA DE PUBLICAÇÃO:</small><span>{{data}}</span></li>
                <li><i class="ico exercicio"></i><small>quantidade:</small> <span>{{modulos}} módulos</span></li>
                <li><i class="ico qtd"></i><small>Quantidade:</small> <span>{{aulas}} Aulas</span></li>
            </ul> 
            <span class="btn btn-warning" v-if="item == 0"><i class="ico alert"></i>Em análise</span> 
            <span  v-if="item == 1">
                    <td>                                            
                        <button class="btn btn-info">Aprovado</button>                                        
                    </td>
                     <a  :href="ativar" class="btn btn-outline-primary">Disponibilizar</a>
 
            </span> 
            <span v-if="item == 3">
                   <td><a class="btn btn-success">Público</a></td>
                        <a  :href="desativar" class="btn btn-outline-danger">Desativar</a>
            </span>

            <div class="lista">
                <div class="caixa">                
                    <modal_link v-if="modal" nome="formAd" tipo="button"  titulo="Novo Modulo" clas="fa fa-ad"></modal_link>
                </div>    
            </div>                            
                


  </div>

</template>

<script>
    export default {
      props:['titulos','itens','ordem','ordemcol','ver','token','modal','editar','categoria','data',
      'modulos','aulas','item','ativar','desativar'],
      data: function(){
        return {
          buscar:'',
          ordemAux: this.ordem || "asc",
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
