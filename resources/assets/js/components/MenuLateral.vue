<template>
     <el-menu
      default-active="2"
      class="el-menu-vertical-demo"
      @open="handleOpen"
      @close="handleClose"
      background-color="#4E568F"
      text-color="#fff"
      active-text-color="#ffd04b">
      
      <el-menu-item index="1" 
        @click="emitViewToParent('view-renta')">
        <i class="el-icon-date"></i>
        <span>Rentas</span>
      </el-menu-item>

      <el-menu-item index="2" 
        @click="emitViewToParent('view-catalogo')">
        <i class="el-icon-menu"></i>
        <span>Catálogo</span>
      </el-menu-item>

      <el-menu-item index="3" 
        @click="emitViewToParent('view-producto')">
        <i class="el-icon-menu"></i>
        <span>Productos</span>
      </el-menu-item>

      <el-submenu index="4">
         <template slot="title">
          <i class="el-icon-menu"></i>
          <span>Bicicletas</span>
        </template>
        <el-menu-item-group title="Opciones">
         <!-- <el-menu-item index="2-1">Lista</el-menu-item> -->
          <el-menu-item index="3-2" @click="emitViewToParent('view-bicicletas')">Nueva Bicicleta</el-menu-item>
        </el-menu-item-group>
      </el-submenu>

      <el-submenu index="5">
         <template slot="title">
          <i class="el-icon-goods"></i>
          <span>Productos</span>
        </template>
        <el-menu-item-group title="Opciones">
          <el-menu-item index="3-1">Lista</el-menu-item>
          <el-menu-item index="3-2">Agregar</el-menu-item>
        </el-menu-item-group>
      </el-submenu>

    </el-menu>

</template>

<script>
    export default {
        name:"MenuLateral",

        data() {
          return {
            key: "value"
          }
        },

        methods:{

          handleOpen(key, keyPath){
             console.log(key, keyPath);
          },

          handleClose(key, keyPath){
            console.log(key, keyPath);
          },

           emitViewToParent(StrinView){
             this.$emit("clickItemView", StrinView)
           }
        }
    }
</script>

<style scoped>
    .el-menu{
        height: 100%;
    }
</style>