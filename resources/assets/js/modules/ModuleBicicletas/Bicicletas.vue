<template>

<el-row>
  <el-col :span="24">
    <h1 class="title-view">
      Nueva bicicleta
    </h1>
  </el-col>
  <el-col :span="24">
      <el-card class="box-card">
        <el-steps :active="active" finish-status="success">
          <el-step :title= "$getText('bicicleta_step_title_select')">
            hola mundo
            
          </el-step>
          <el-step :title="$getText('bicicleta_step_title_techic')">

          </el-step>
          <el-step :title="$getText('bicicleta_step_title_images')">

          </el-step>
        </el-steps>
        <!-- formulario 1-->
        
        <select-form v-if="active === 1"></select-form>

        <el-button style="margin-top: 12px;" @click="next">Next step</el-button>
      </el-card>

  </el-col>
</el-row>

</template>

<script>
import SelectForm from './CreateComponents/Selects.vue'

export default {

  components:{
    SelectForm
  },

  mounted() {
    console.log("Component mounted.");
  },
  name: "bicicleta-view",
  data() {
    return {
      active: 0,
      color_id: "1",
      marca: "",
      modelo: "",
      modalidad: "",
      genero: "",
      velocidad: "",
      material: "",
      rodada: "",
      capacidad: "",
      modelaje: "",
      descripcion: "",
      componente: "00000000",
      publicacion: "00000000",
      img_url_header: "000000000",
      image_header: "000000000",
      options: [
        {
          value: "1",
          label: "Option 1"
        },
        {
          value: "2",
          label: "Option 2"
        },
        {
          value: "3",
          label: "Option 3"
        },
        {
          value: "4",
          label: "Option 4"
        },
        {
          value: "5",
          label: "Option 5"
        }
      ],
      medida_id: "",
      material_id: "",
      modalidad_id: ""
    };
  },

  methods: {
    
    next() {
        if (this.active++ > 2) this.active = 0;
    },

    /* ---Formulario de guardado de bicicletas ---*/
    formSubmit(e) {
      e.preventDefault();
      let currentObj = this;
      axios
        .post("/bicicleta/create", {
          color_id: this.color_id,
          marca: this.marca,
          modelo: this.modelo,
          genero: this.genero,
          modalidad: this.modalidad,
          velocidad: this.velocidad,
          material: this.material,
          rodada: this.rodada,
          capacidad: this.capacidad,
          modelaje: this.modelaje,
          descripcion: this.descripcion,
          componente: "00000000",
          publicacion: "00000000",
          medida_id: this.medida_id,
          material_id: this.material_id,
          modalidad_id: this.modalidad_id,
          img_url_header: "000000000",
          image_header: "000000000"
        })
        .then(function(response) {
          alert("Guardado exitoso: " + response.data);
          console.log(response.data);
        })
        .catch(function(error) {
          alert("Error al guardar los cambios: " + error.response);
          console.log(error.response);
        });
    },
    /*-------------------------------------------*/

    /*VENTANAS EMERGENTES PARA EL USUARIO*/
    guardarMessage(boolianParameter) {
      if (boolianParameter == 1) {
        this.$confirm("¿Desea guardar los datos?", "", {
          confirmButtonText: "Si",
          cancelButtonText: "No",
          type: "warning"
        })
          .then(() => {
            formSubmit;
          })
          .catch(() => {
            this.$message({
              type: "warning",
              message: "Los datros no se han guardado"
            });
          });
      } else {
        this.$confirm("¿Desea salir del formulario?", "", {
          confirmButtonText: "Si",
          cancelButtonText: "No",
          type: "warning"
        })
          .then(() => {
            this.$router.push("home");
          })
          .catch(() => {
            this.$emit("clickItemView", "view-renta");
          });
      }
    }
  }
};
</script>

<style scoped>
/* .el-header {
  text-align: center;
  font-size: 2em;
  color: white;
  background: #99a9bf;
}
.el-main {
  background: #d3dce6;
}
.el-row {
  margin-bottom: 10px;
  &:last-child {
    margin-bottom: 0;
  }
}
.el-select {
  width: 100%;
}
.el-upload {
  width: 100%;
}
.el-button,
.el-color-picker {
  width: 100%;
} */
</style>