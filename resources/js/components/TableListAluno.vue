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
                        <td>{{item.id}}</td>
                         
                           
                            <td v-if="item.foto!=null"><a :href="'/aluno/'+item.id"><img :src="foto+item.foto" alt="" class="wd-32 rounded-circle"></a></td>                        
                        
                           
                            <td v-if="item.foto==null"><a :href="'/aluno/'+item.id"><img :src="foto+'utilizadores/semfoto.jpg'" alt="" class="wd-32 rounded-circle"></a></td>                        
                         
                                                  
                        <td>{{item.name}}</td>
                        <td>{{item.email}}</td>
                        <td>{{item.curso_nome}}
                            <span v-if="item.id_formador == tipo"><br>Produtor</span>
                            <span v-else><br>Coprodutor</span>
                        </td>
                        <td>{{item.valor}} kz</td>
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
        props:['titulos','itens','tipo','foto']
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