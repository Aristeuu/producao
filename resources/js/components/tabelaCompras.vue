<template>
    <div>
        <div class="bd rounded table-responsive tabl-aluno">
                <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th v-for="(titulo,index) in titulos">{{titulo}}</th>                                            
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(item,index) in itens">                      
                                                   
                         <td v-if="item.curso_img!=null"><img :src="foto+item.curso_img" alt="" class="wd-32 rounded-circle"></td>                                            
                                                  
                                                                          
                        <td>{{item.curso_nome}}</td>
                        <td>{{item.curso_preco}} kz</td>
                        <td>{{item.created_at}}</td>                    
                        
                            <td class="btn btn-warning " v-if="item.status=='PE'" style="margin-top:0.2rem">PENDENTE</td>                  
                            <td class="btn btn-success" v-if="item.status=='PA'">PAGO</td>
                     
                        
                    </tr>
                </tbody>
            
            </table>
        </div>
            

    </div>


</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        props:['titulos','itens','foto']
    }
</script>

<style>

.wd-32 {
    width: 50px;
}
.tabl-aluno  td img{
   margin-top: -0.6rem;
}



</style>