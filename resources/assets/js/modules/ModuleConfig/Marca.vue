<template>
  <div class="container">
    <el-row :gutter="5" style="sticky;  top: 0;">
      <el-col :span="16">&nbsp</el-col>
      <el-col :span="4">
        <el-input placeholder="buscar" prefix-icon="el-icon-search" v-model="input21"></el-input>
      </el-col>
      <el-col :span="2">
        <el-dropdown split-button type="primary">Filtro
          <el-dropdown-menu slot="dropdown">
            <el-dropdown-item>Action 1</el-dropdown-item>
            <el-dropdown-item>Action 2</el-dropdown-item>
            <el-dropdown-item>Action 3</el-dropdown-item>
            <el-dropdown-item>Action 4</el-dropdown-item>
          </el-dropdown-menu>
        </el-dropdown>
      </el-col>
      <el-col :span="2">
        <el-button type="success" icon="el-icon-circle-plus" @click="nuevaMarca"></el-button>
      </el-col>
    </el-row>

    <el-row :gutter="5" style="sticky;  top: 0;">
      <el-table v-loading="loading" :data="tableData" style="width: 100%">
        <el-table-column label="Material" width="180">
          <template slot-scope="scope">
            <el-popover trigger="hover" placement="top">
              <p>Name: {{ scope.row.id }}</p>
              <p>Addr: {{ scope.row.marca }}</p>
              <div slot="reference" class="name-wrapper">
                <el-tag size="medium">{{ scope.row.marca }}</el-tag>
              </div>
            </el-popover>
          </template>
        </el-table-column>

        <el-table-column label="Editar">
          <template slot-scope="scope">
            <el-button size="mini" type="danger" @click="eliminarElemento(scope.row.id)">Eliminar</el-button>
          </template>
        </el-table-column>
      </el-table>
    </el-row>
  </div>
</template>

<script>
export default {
  data() {
    return {
      tableData: [],
      marca: ""
    };
  },
  mounted() {
    var urlKeeps = "/marca/list";
    axios.get(urlKeeps).then(response => {
      this.tableData = response.data;
      console.log(response.data);
    });
  },
  methods: {
    handleEdit(index, row) {
      console.log(index, row);
    },
    handleDelete(index, row) {
      console.log(index, row);
    },
    nuevaMarca() {
      this.$prompt("Por favor, agrega la nueva marca", "Nueva marca", {
        confirmButtonText: "OK",
        cancelButtonText: "Cancel"
      })
        .then(({ value }) => {
          axios
            .post("/marca/create", {
              marca: value
            })
            .then(response => {
              this.nuevaFila(response);
              this.successBox();
            })
            .catch(error => {
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
    eliminarElemento: function(element0) {
      this.$confirm(
        "¿Esta seguro de eliminar este elemento permanentemente?",
        "Advertencia: ",
        {
          confirmButtonText: "Continuar",
          cancelButtonText: "Cancelar",
          type: "warning"
        }
      )
        .then(() => {
          axios
            .post("/marca/destroy", {
              id: element0
            })
            .then(response => {
              this.quitarFila(response);
              this.successBox();
            })
            .catch(error => {
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
    nuevaFila: function(response) {
      if (response.status === 200 || response.status === 201) {
        let position = null;

        this.tableData.forEach((element, index) => {
          if (element.id == response.data.id) {
            position = index;
          }
        });

        if (position != null) {
          Vue.set(this.tableData, position, response.data);
        } else {
          Vue.set(this.tableData, this.tableData.length, response.data);
        }
        this.loading = false;
      }
    },
    quitarFila: function(response) {},
    successBox: function() {
      this.$notify({
        title: "Listo",
        message: "El dato se registró correctamente",
        type: "success"
      });
    }
  }
};
</script>

<style scoped>
.el-row {
  margin-bottom: 10px;
}
[row="titulo"] {
  background-color: #f4f4f4;
  text-align: center;
  height: 45px;
  line-height: 45px;
  color: #282828;
  margin-bottom: 0px;
}
.container :last-child {
  margin-bottom: 0;
}

.el-col {
  border-radius: 4px;
}

/* -----botones----- */
.time {
  font-size: 13px;
  color: #999;
}

.bottom {
  margin-top: 0px;
  line-height: 12px;
}
.image {
  width: 100%;
  display: block;
  margin-bottom: 25px;
}
.el-input {
  width: 100%;
}
.el-dropdown,
.el-dropdown-menu,
.el-dropdown-item {
  width: 100%;
}
</style>
