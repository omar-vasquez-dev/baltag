<template>
    <div>
        Modulo renta {{ nombre }}
        <button @click="cambiarNombre()">
            Cambiar nombre
        </button>
    </div> 
</template>

<script>
    export default {
        name:"Renta view",

        data() {
            return {
                nombre : "blog"
            }
        },

        methods:{
            cambiarNombre(){
                this.nombre = "beto"
            }
        }
    }
</script>

<style scoped>

</style>