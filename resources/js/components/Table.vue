<template>
    <div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Valor</th>
                        <th>Data</th>
                        <th>Tipo de movimento</th>                    
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>5000 Kz</td>
                        <td>07-03-2021</td>
                        <td>Saida</td>
                    </tr>
                </tbody>
            
            </table>

    </div>


</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>