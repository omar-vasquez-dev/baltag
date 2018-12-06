<template>
  <el-menu
    default-active="2"
    class="el-menu-vertical-demo"
    @open="handleOpen"
    @close="handleClose"
    background-color="#43425D"
    text-color="#fff"
    active-text-color="#ffd04b"
  >
    <el-menu-item index="1" @click="emitViewToParent('view-renta')">
      <i class="el-icon-date"></i>
      <span>Rentas</span>
    </el-menu-item>

    <el-menu-item index="2" @click="emitViewToParent('view-catalogo')">
      <i class="el-icon-menu"></i>
      <span>Catálogo</span>
    </el-menu-item>

    <el-menu-item index="3" @click="emitViewToParent('view-producto')">
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
        <el-menu-item index="5-1">Lista</el-menu-item>
        <el-menu-item index="5-2">Agregar</el-menu-item>
      </el-menu-item-group>
    </el-submenu>

    <el-submenu index="6">
      <template slot="title">
        <i class="el-icon-setting"></i>
        <span>Configuraciones</span>
      </template>
      <el-menu-item-group title="Opciones">
        <el-menu-item index="6-1" @click="nuevaMarca">
          <i class="el-icon-circle-plus"></i>Marca
        </el-menu-item>
        <el-menu-item index="6-2" @click="nuevaComp">
          <i class="el-icon-circle-plus"></i>Componente
        </el-menu-item>
        <el-menu-item index="6-3" @click="NuevaComp()">
          <i class="el-icon-circle-plus"></i>Medida
        </el-menu-item>

        <el-menu-item index="6-4" @click="NuevaComp()">
          <i class="el-icon-circle-plus"></i>Material
        </el-menu-item>


        <el-menu-item index="6-5" @click="NuevaComp()">
          <i class="el-icon-circle-plus"></i>Nueva Modalidad
        </el-menu-item>
      </el-menu-item-group>
    </el-submenu>
  </el-menu>
</template>

<script>
export default {
  name: "MenuLateral",

  data() {
    return {
      key: "value",
      marca: "",
      componente: ""
    };
  },

  methods: {
    handleOpen(key, keyPath) {
      console.log(key, keyPath);
    },

    handleClose(key, keyPath) {
      console.log(key, keyPath);
    },

    emitViewToParent(StrinView) {
      this.$emit("clickItemView", StrinView);
    },
    /*--- ---- Formularios especiales para guardar marca y componentes ---- ---*/
    nuevaMarca() {
      this.$prompt("Por favor, agrega la nueva marca", "Nueva marca", {
        confirmButtonText: "OK",
        cancelButtonText: "Cancel"
      })
        .then(({ value }) => {
          let currentObj = this;
          axios
            .post("/marca/create", {
              marca: value
            })
            .then(function(response) {
              alert("Nueva marca añadida");
            })
            .catch(function(error) {
              alert(error);
            });
        })
        .catch(() => {
          this.$notify({
            title: "Advertencia",
            message: "El producto no se guardo",
            type: "warning"
          });
        });
    },
    nuevaComp() {
      this.$prompt(
        "Por favor, agrega el nuevo componente",
        "Nuevo componente",
        {
          confirmButtonText: "OK",
          cancelButtonText: "Cancel"
        }
      )
        .then(({ value }) => {
          let currentObj = this;
          axios
            .post("/componente/create", {
              componente: value
            })
            .then(function(response) {
              alert("Nuevo componente añadido");
            })
            .catch(function(error) {
              alert(error);
            });
        })
        .catch(() => {
          this.$notify({
            title: "Advertencia",
            message: "El producto no se guardo",
            type: "warning"
          });
        });
    }
    /*-------------------------------------------------------------------------*/
  }
};
</script>

<style scoped>
.el-menu {
  height: 100%;
}
</style>