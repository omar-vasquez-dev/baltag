<template>
  <el-container>
    <el-header>Nueva Bicicleta</el-header>
    <el-main>
      <!-- form @submit="formSubmit" -->
      <el-row :gutter="10">
        <el-col :span="12">Marca
          <el-input placeholder="Descripcion" v-model="marca"></el-input>
        </el-col>
        <el-col :span="12">Select 1
          <el-select v-model="value" placeholder="Select">
            <el-option
              v-for="item in options"
              :key="item.value"
              :label="item.label"
              :value="item.value"
            ></el-option>
          </el-select>
        </el-col>
      </el-row>

      <el-row :gutter="10">
        <el-col :span="12">Modelo
          <el-input placeholder="Descripcion" v-model="modelo"></el-input>
        </el-col>
        <el-col :span="12">Select 2
          <!-- <el-select v-model="value" placeholder="Select">
            <el-option
                v-for="item in options"
                :key="item.value"
                :label="item.label"
                :value="item.value">
            </el-option> 
          </el-select>-->
        </el-col>
      </el-row>

      <el-row :gutter="10">
        <el-col :span="12">Género
          <el-input placeholder="Descripcion" v-model="genero"></el-input>
        </el-col>
        <el-col :span="12">Select 3
          <!-- <el-select v-model="value" placeholder="Select">
            <el-option
                v-for="item in options"
                :key="item.value"
                :label="item.label"
                :value="item.value">
            </el-option>
          </el-select>-->
        </el-col>
      </el-row>

      <el-row :gutter="10">
        <el-col :span="12">Modalidad
          <el-input placeholder="Descripcion" v-model="modalidad"></el-input>
        </el-col>
        <el-col :span="12">Color
          <el-color-picker v-model="color"></el-color-picker>
        </el-col>
      </el-row>
      <el-row :gutter="10">
        <el-col :span="12">Velocidad
          <el-input placeholder="Descripcion" v-model="velocidad"></el-input>
        </el-col>
        <el-col :span="12"></el-col>
      </el-row>

      <el-row :gutter="10">
        <el-col :span="12">Material
          <el-input placeholder="Descripcion" v-model="materia"></el-input>
        </el-col>
        <el-col :span="12"></el-col>
      </el-row>

      <el-row :gutter="10">
        <el-col :span="12">Rodada
          <el-input placeholder="Descripcion" v-model="rodada"></el-input>
        </el-col>
        <el-col :span="12"></el-col>
      </el-row>

      <el-row :gutter="10">
        <el-col :span="12">Capacidad
          <el-input placeholder="Descripcion" v-model="capacidad"></el-input>
        </el-col>
        <el-col :span="12"></el-col>
      </el-row>

      <el-row :gutter="10">
        <el-col :span="12">Modelaje
          <el-input placeholder="Descripcion" v-model="modelaje"></el-input>
        </el-col>
        <el-col :span="12"></el-col>
      </el-row>

      <el-row :gutter="10">
        <el-col :span="12">Descripción
          <el-input type="textarea" :rows="8" placeholder="Please input" v-model="descripcion"></el-input>
        </el-col>
        <el-col :span="12">Fotografias
          <el-upload
            class="upload-demo"
            style="width: 100%;"
            drag
            action="https://jsonplaceholder.typicode.com/posts/"
            :on-preview="handlePreview"
            :on-remove="handleRemove"
            :file-list="fileList"
            multiple
            v-model="fotos"
          >
            <i class="el-icon-upload"></i>
            <div class="el-upload__text">
              Suelta tu archivo aquí o
              <em>haz clic para cargar</em>
            </div>
            <div
              slot="tip"
              class="el-upload__tip"
            >Solo archivos jpg/png con un tamaño menor de 500kb</div>
          </el-upload>
        </el-col>
      </el-row>

      <el-row :gutter="10">
        <el-col :span="6">&nbsp</el-col>
        <el-col :span="6">&nbsp</el-col>
        <el-col :span="6">
          <!-- el-button type="text" @click="guardarMessage(0)">Cancelar</el-button  -->
          <el-button type="text" style="color:red;">Cancelar</el-button>
          <div></div>
        </el-col>
        <el-col :span="6">
          <!-- el-button type="danger" plain @click="guardarMessage(0)">Cancelar</el-button  -->
          <el-button type="success" plain @click="formSubmit">Guardar</el-button> 
          <!-- <el-button type="success" @click="formSubmit">Guardar</el-button>  -->
        </el-col>
      </el-row>
      <!-- /form -->
    </el-main>
  </el-container>
</template>

<script>
export default {
  mounted() {
    console.log("Component mounted.");
  },
  name: "Bicicletas view",
  data() {
    return {
      color: "#ff00ff",
      marca: '',
      modelo: '',
      genero: '',
      modalidad: '',
      velocidad: '',
      material: '',
      rodada: '',
      capacidad: '',
      modelaje: '',
      descripcion: '',
      options: [
        {
          value: "Option1",
          label: "Option1"
        },
        {
          value: "Option2",
          label: "Option2"
        },
        {
          value: "Option3",
          label: "Option3"
        },
        {
          value: "Option4",
          label: "Option4"
        },
        {
          value: "Option5",
          label: "Option5"
        }
      ]
    };
  },
  methods: {
    /* ---Formulario de guardado de bicicletas ---*/
    formSubmit(e) {
      e.preventDefault();
      let currentObj = this;
      axios
        .post("/bicicleta/create",{
          color: this.color,
          marca: this.marca,
          modelo: this.modelo,
          genero: this.genero,
          modalidad: this.modalidad,
          velocidad: this.velocidad,
          material: this.material,
          rodada: this.rodada,
          capacidad: this.capacidad,
          modelaje: this.modelaje,
          descripcion: this.descripcion
        })
        .then(function(response) {
            alert("Guardado exitoso: "+response.data);            
        })
        .catch(function(error) {
            alert("Error al guardar los cambios");
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
.el-header {
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
}
</style>