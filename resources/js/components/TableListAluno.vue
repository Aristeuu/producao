<template>
    <div>
        <div class="bd rounded table-responsive">
                <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th v-for="(titulo,index) in titulos">{{titulo}}</th>                                            
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(item,index) in itens">
                        <td>{{item.id}}</td>
                         <div class="card-profile-img">
                            <span v-if="item.foto!=null">
                            <td><img :src="'http://localhost/yetoafrica/storage/app/public/'+item.foto" alt="" class="wd-32 rounded-circle"></td>                        
                            </span>
                            <span v-if="item.foto==null">
                            <td><img :src="'http://localhost/yetoafrica/storage/app/public/utilizadores/semfoto.jpg'" alt="" class="wd-32 rounded-circle"></td>                        
                            </span>
                         </div>                            
                        <td>{{item.name}}</td>
                        <td>{{item.email}}</td>
                        <td>{{item.curso_nome}}</td>
                        <td>{{item.valor}} kz</td>
                        <span v-if="item.status=='PE'">
                            <td class="btn btn-warning">PENDENTE</td>
                        </span>
                        <span v-if="item.status=='PA'">
                            <td class="btn btn-success">PAGO</td>
                        </span>
                        
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
        props:['titulos','itens']
    }
</script>