<template>
  
  <div class="modal fade" v-bind:id="nome" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">{{titulo}}</h4>
        <div>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
      </div>
      <div class="modal-body">
        <slot>         
        </slot>
      </div>            
    </div>
  </div>
</div>
</template>
 
<script>
    export default {
      props:['nome','titulo']

    }
</script>
 