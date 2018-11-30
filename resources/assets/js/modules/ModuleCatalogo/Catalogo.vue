<template>
  <el-container>
    <el-main>
      <el-row :gutter="3">
        <el-col :span="6">
          <el-card :body-style="{ padding: '0px' }">
            <img
              src="https://www.mhw-bike.de/media/image/1e/8e/94/18YC1020-Ghost-Hybride-Lector-S8-7-LC-2018-0_750x750.jpg"
              class="image"
            >
            <div style="padding: 14px;">
              <span>Bicicleta 1</span>
              <div class="bottom clearfix">
                <el-row>
                  <el-button type="success" icon="el-icon-edit"></el-button>
                  <el-button type="danger" icon="el-icon-delete"></el-button>
                </el-row>
              </div>
            </div>
          </el-card>
        </el-col>

        <el-col :span="6">
          <el-card :body-style="{ padding: '0px' }">
            <img
              src="https://www.mhw-bike.de/media/image/1e/8e/94/18YC1020-Ghost-Hybride-Lector-S8-7-LC-2018-0_750x750.jpg"
              class="image"
            >
            <div style="padding: 14px;">
              <span>Bicicleta 2</span>
              <div class="bottom clearfix">
                <el-row>
                  <el-button type="success" icon="el-icon-edit"></el-button>
                  <el-button type="danger" icon="el-icon-delete"></el-button>
                </el-row>
              </div>
            </div>
          </el-card>
        </el-col>

        <el-col :span="6">
          <el-card :body-style="{ padding: '0px' }">
            <img
              src="https://www.mhw-bike.de/media/image/1e/8e/94/18YC1020-Ghost-Hybride-Lector-S8-7-LC-2018-0_750x750.jpg"
              class="image"
            >
            <div style="padding: 14px;">
              <span>Bicicleta 3</span>
              <div class="bottom clearfix">
                <el-row>
                  <el-button type="success" icon="el-icon-edit"></el-button>
                  <el-button type="danger" icon="el-icon-delete"></el-button>
                </el-row>
              </div>
            </div>
          </el-card>
        </el-col>

        <el-col :span="6">
          <el-card :body-style="{ padding: '0px' }">
            <img
              src="https://www.mhw-bike.de/media/image/1e/8e/94/18YC1020-Ghost-Hybride-Lector-S8-7-LC-2018-0_750x750.jpg"
              class="image"
            >
            <div style="padding: 14px;">
              <span>Bicicleta 4</span>
              <div class="bottom clearfix">
                <el-row>
                  <el-button type="success" icon="el-icon-edit"></el-button>
                  <el-button type="danger" icon="el-icon-delete"></el-button>
                </el-row>
              </div>
            </div>
          </el-card>
        </el-col>
      </el-row>

      <el-row :gutter="3">
        <el-col :span="6">
          <el-card :body-style="{ padding: '0px' }">
            <img
              src="https://www.mhw-bike.de/media/image/1e/8e/94/18YC1020-Ghost-Hybride-Lector-S8-7-LC-2018-0_750x750.jpg"
              class="image"
            >
            <div style="padding: 14px;">
              <span>Bicicleta 5</span>
               <div class="bottom clearfix">
                <el-row>
                  <el-button type="success" icon="el-icon-edit"></el-button>
                  <el-button type="danger" icon="el-icon-delete"></el-button>
                </el-row>
              </div>
            </div>
          </el-card>
        </el-col>
        <el-col :span="6">
          <el-card :body-style="{ padding: '0px' }">
            <img
              src="https://www.mhw-bike.de/media/image/1e/8e/94/18YC1020-Ghost-Hybride-Lector-S8-7-LC-2018-0_750x750.jpg"
              class="image"
            >
            <div style="padding: 14px;">
              <span>Bicicleta 6</span>
              <div class="bottom clearfix">
                <el-row>
                  <el-button type="success" icon="el-icon-edit"></el-button>
                  <el-button type="danger" icon="el-icon-delete"></el-button>
                </el-row>
              </div>
            </div>
          </el-card>
        </el-col>
        <el-col :span="6">
          <el-card :body-style="{ padding: '0px' }">
            <img
              src="https://www.mhw-bike.de/media/image/1e/8e/94/18YC1020-Ghost-Hybride-Lector-S8-7-LC-2018-0_750x750.jpg"
              class="image"
            >
            <div style="padding: 14px;">
              <span>Bicicleta 7</span>
              <div class="bottom clearfix">
                <el-row>
                  <el-button type="success" icon="el-icon-edit"></el-button>
                  <el-button type="danger" icon="el-icon-delete"></el-button>
                </el-row>
              </div>
            </div>
          </el-card>
        </el-col>
        <el-col :span="6">
          <el-card :body-style="{ padding: '0px' }">
            <img
              src="https://www.mhw-bike.de/media/image/1e/8e/94/18YC1020-Ghost-Hybride-Lector-S8-7-LC-2018-0_750x750.jpg"
              class="image"
            >
            <div style="padding: 14px;">
              <span>Bicicleta 8</span>
              <div class="bottom clearfix">
                <el-row>
                  <el-button type="success" icon="el-icon-edit"></el-button>
                  <el-button type="danger" icon="el-icon-delete"></el-button>
                </el-row>
              </div>
            </div>
          </el-card>
        </el-col>
      </el-row>
    </el-main>
  </el-container>
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
  margin-bottom: 20px;
  &:last-child {
    margin-bottom: 0;
  }
}
.el-col {
  border-radius: 4px;
}
.bg-purple-dark {
  background: #99a9bf;
}
.bg-purple {
  background: #fff;
}
.bg-purple-light {
  background: #e5e9f2;
}
.grid-content {
  border-radius: 4px;
  min-height: 36px;
}
.row-bg {
  padding: 10px 0;
  background-color: #f9fafc;
}

.el-header,
.el-footer {
  background-color: #b3c0d1;
  color: #333;
  text-align: center;
  line-height: 60px;
}

.el-aside {
  background-color: #d3dce6;
  color: #333;
  text-align: center;
  line-height: 200px;
}

.el-main {
  background-color: #e9eef3;
  color: #333;
  text-align: center;
  line-height: 160px;
}

body > .el-container {
  margin-bottom: 40px;
}

.el-container:nth-child(5) .el-aside,
.el-container:nth-child(6) .el-aside {
  line-height: 260px;
}

.el-container:nth-child(7) .el-aside {
  line-height: 320px;
}

.time {
  font-size: 13px;
  color: #999;
}

.bottom {
  margin-top: 13px;
  line-height: 12px;
}

.button {
  padding: 0;
  float: right;
}

.image {
  width: 100%;
  display: block;
}

.clearfix:before,
.clearfix:after {
  display: table;
  content: "";
}

.clearfix:after {
  clear: both;
}

.demo-input-label {
  display: inline-block;
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
