<template>
  <div class="container">
    <el-row :gutter="5">
      <el-col :span="16"></el-col>
      <el-col :span="4">
        <el-input
          placeholder="buscar"
          prefix-icon="el-icon-search"
          v-model="input21">
        </el-input>        
      </el-col>
      <el-col :span="4"></el-col>           
    </el-row
    >
    <el-row :gutter="5">
      <el-col :span="6">
        <el-card :body-style="{ padding: '0px' }">
          <img
            src="https://www.mhw-bike.de/media/image/1e/8e/94/18YC1020-Ghost-Hybride-Lector-S8-7-LC-2018-0_750x750.jpg"
            class="image"
          >
          <el-row :span="24" row="titulo">
            <span>Bicicleta 1</span>
          </el-row>
          <el-row :span="24" row="botones">
            <el-col :span="8">
              <el-button type="warning" icon="el-icon-star-on">Stats</el-button>
            </el-col>
            <el-col :span="8">
              <el-button type="success" icon="el-icon-edit">Editar</el-button>
            </el-col>
            <el-col :span="8">
              <el-button type="danger" icon="el-icon-delete">Eliminar</el-button>
            </el-col>
          </el-row>
        </el-card>
      </el-col>

      <el-col :span="6">
        <el-card :body-style="{ padding: '0px' }">
          <img
            src="https://www.mhw-bike.de/media/image/1e/8e/94/18YC1020-Ghost-Hybride-Lector-S8-7-LC-2018-0_750x750.jpg"
            class="image"
          >
          <el-row :span="24" row="titulo">
            <span>Bicicleta 1</span>
          </el-row>
          <el-row :span="24" row="botones">
            <el-col :span="8">
              <el-button type="warning" icon="el-icon-star-on">Stats</el-button>
            </el-col>
            <el-col :span="8">
              <el-button type="success" icon="el-icon-edit">Editar</el-button>
            </el-col>
            <el-col :span="8">
              <el-button type="danger" icon="el-icon-delete">Eliminar</el-button>
            </el-col>
          </el-row>
        </el-card>
      </el-col>

      <el-col :span="6">
        <el-card :body-style="{ padding: '0px' }">
          <img
            src="https://www.mhw-bike.de/media/image/1e/8e/94/18YC1020-Ghost-Hybride-Lector-S8-7-LC-2018-0_750x750.jpg"
            class="image"
          >
          <el-row :span="24" row="titulo">
            <span>Bicicleta 1</span>
          </el-row>
          <el-row :span="24" row="botones">
            <el-col :span="8">
              <el-button type="warning" icon="el-icon-star-on">Stats</el-button>
            </el-col>
            <el-col :span="8">
              <el-button type="success" icon="el-icon-edit">Editar</el-button>
            </el-col>
            <el-col :span="8">
              <el-button type="danger" icon="el-icon-delete">Eliminar</el-button>
            </el-col>
          </el-row>
        </el-card>
      </el-col>

      <el-col :span="6">
        <el-card :body-style="{ padding: '0px' }">
          <img
            src="https://www.mhw-bike.de/media/image/1e/8e/94/18YC1020-Ghost-Hybride-Lector-S8-7-LC-2018-0_750x750.jpg"
            class="image"
          >
          <el-row :span="24" row="titulo">
            <span>Bicicleta 1</span>
          </el-row>
          <el-row :span="24" row="botones">
            <el-col :span="8">
              <el-button type="warning" icon="el-icon-star-on">Stats</el-button>
            </el-col>
            <el-col :span="8">
              <el-button type="success" icon="el-icon-edit">Editar</el-button>
            </el-col>
            <el-col :span="8">
              <el-button type="danger" icon="el-icon-delete">Eliminar</el-button>
            </el-col>
          </el-row>
        </el-card>
      </el-col>
    </el-row>

    <el-row :gutter="5">
      <el-col :span="6">
        <el-card :body-style="{ padding: '0px' }">
          <img
            src="https://www.mhw-bike.de/media/image/1e/8e/94/18YC1020-Ghost-Hybride-Lector-S8-7-LC-2018-0_750x750.jpg"
            class="image"
          >
          <el-row :span="24" row="titulo">
            <span>Bicicleta 1</span>
          </el-row>
          <el-row :span="24" row="botones">
            <el-col :span="8">
              <el-button type="warning" icon="el-icon-star-on">Stats</el-button>
            </el-col>
            <el-col :span="8">
              <el-button type="success" icon="el-icon-edit">Editar</el-button>
            </el-col>
            <el-col :span="8">
              <el-button type="danger" icon="el-icon-delete">Eliminar</el-button>
            </el-col>
          </el-row>
        </el-card>
      </el-col>
      <el-col :span="6">
        <el-card :body-style="{ padding: '0px' }">
          <img
            src="https://www.mhw-bike.de/media/image/1e/8e/94/18YC1020-Ghost-Hybride-Lector-S8-7-LC-2018-0_750x750.jpg"
            class="image"
          >
          <el-row :span="24" row="titulo">
            <span>Bicicleta 1</span>
          </el-row>
          <el-row :span="24" row="botones">
            <el-col :span="8">
              <el-button type="warning" icon="el-icon-star-on">Stats</el-button>
            </el-col>
            <el-col :span="8">
              <el-button type="success" icon="el-icon-edit">Editar</el-button>
            </el-col>
            <el-col :span="8">
              <el-button type="danger" icon="el-icon-delete">Eliminar</el-button>
            </el-col>
          </el-row>
        </el-card>
      </el-col>
      <el-col :span="6">
        <el-card :body-style="{ padding: '0px' }">
          <img
            src="https://www.mhw-bike.de/media/image/1e/8e/94/18YC1020-Ghost-Hybride-Lector-S8-7-LC-2018-0_750x750.jpg"
            class="image"
          >
          <el-row :span="24" row="titulo">
            <span>Bicicleta 1</span>
          </el-row>
          <el-row :span="24" row="botones">
            <el-col :span="8">
              <el-button type="warning" icon="el-icon-star-on">Stats</el-button>
            </el-col>
            <el-col :span="8">
              <el-button type="success" icon="el-icon-edit">Editar</el-button>
            </el-col>
            <el-col :span="8">
              <el-button type="danger" icon="el-icon-delete">Eliminar</el-button>
            </el-col>
          </el-row>
        </el-card>
      </el-col>
      <el-col :span="6">
        <el-card :body-style="{ padding: '0px' }">
          <img
            src="https://www.mhw-bike.de/media/image/1e/8e/94/18YC1020-Ghost-Hybride-Lector-S8-7-LC-2018-0_750x750.jpg"
            class="image"
          >
          <el-row :span="24" row="titulo">
            <span>Bicicleta 1</span>
          </el-row>
          <el-row :span="24" row="botones">
            <el-col :span="8">
              <el-button type="warning" icon="el-icon-star-on">Stats</el-button>
            </el-col>
            <el-col :span="8">
              <el-button type="success" icon="el-icon-edit">Editar</el-button>
            </el-col>
            <el-col :span="8">
              <el-button type="danger" icon="el-icon-delete">Eliminar</el-button>
            </el-col>
          </el-row>
        </el-card>
      </el-col>
    </el-row>
  </div>
</template>

<script>
export default {
  name: "Renta view",

  data() {
    return {
      nombre: "blog"
    };
  },

  methods: {
    cambiarNombre() {
      this.nombre = "beto";
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

.button {
  padding: 0;
  width: 100%;
}
.el-button {
  width: 100%;
  border-radius: 0px 0px 0px 0px;
}
.image {
  width: 100%;
  display: block;
}

.image {
  margin-bottom: 25px;
}
.el-input{
  width: 100%;
}
</style>

<script>
export default {
  name: "Renta view",

  data() {
    return {
      nombre: "blog"
    };
  },

  methods: {
    cambiarNombre() {
      this.nombre = "beto";
    }
  }
};
