<template>
    <div :class="defineCor">
        <p>{{msg}}</p>
    </div>
</template>

<script>
    export default {
        props:['color','msg'],
        computed:{
          defineCor: function(){
              return "alert " + this.color;
          }
        }
    }
</script>
