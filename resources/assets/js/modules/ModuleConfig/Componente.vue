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
        <el-button type="success" icon="el-icon-circle-plus" @click="nuevaComp"></el-button>
      </el-col>
    </el-row>

    <el-row :gutter="5" style="sticky;  top: 0;">
      <el-table :data="tableData" style="width: 100%">
        <el-table-column label="Fecha" width="180">
          <template slot-scope="scope">
            <i class="el-icon-time"></i>
            <span style="margin-left: 10px">{{ scope.row.date }}</span>
          </template>
        </el-table-column>
        <el-table-column label="Nombre" width="180">
          <template slot-scope="scope">
            <el-popover trigger="hover" placement="top">
              <p>Name: {{ scope.row.name }}</p>
              <p>Addr: {{ scope.row.address }}</p>
              <div slot="reference" class="name-wrapper">
                <el-tag size="medium">{{ scope.row.name }}</el-tag>
              </div>
            </el-popover>
          </template>
        </el-table-column>
        <el-table-column label="Operaciones">
          <template slot-scope="scope">
            <el-button size="mini" @click="handleEdit(scope.$index, scope.row)">Editar</el-button>
            <el-button
              size="mini"
              type="danger"
              @click="handleDelete(scope.$index, scope.row)"
            >Eliminar</el-button>
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
      tableData: [
        {
          date: "2016-05-03",
          name: "Tom",
          address: "No. 189, Grove St, Los Angeles"
        },
        {
          date: "2016-05-02",
          name: "Tom",
          address: "No. 189, Grove St, Los Angeles"
        },
        {
          date: "2016-05-04",
          name: "Tom",
          address: "No. 189, Grove St, Los Angeles"
        },
        {
          date: "2016-05-01",
          name: "Tom",
          address: "No. 189, Grove St, Los Angeles"
        }
      ]
    };
  },
  methods: {
    handleEdit(index, row) {
      console.log(index, row);
    },
    handleDelete(index, row) {
      console.log(index, row);
    },
    nuevaComp() {
      this.$prompt("Por favor, agrega el nuevo componente","Nuevo componente",
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
