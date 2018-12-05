<template>
  <div>
    <el-row :gutter="10">
      <el-col :span="8">
        <el-container>
          <el-aside width="200px">Barra lateral</el-aside>
          <el-container>
            <el-header>Cabecera</el-header>
            <el-main>Principal</el-main>
            <el-footer>Pie de página</el-footer>
          </el-container>
        </el-container>
      </el-col>
      <el-col :span="8">
        <el-container>
          <el-aside width="200px">Barra lateral</el-aside>
          <el-container>
            <el-header>Cabecera</el-header>
            <el-main>Principal</el-main>
            <el-footer>Pie de página</el-footer>
          </el-container>
        </el-container>
      </el-col>
      <el-col :span="8">
        <el-container>
          <el-aside width="200px">Barra lateral</el-aside>
          <el-container>
            <el-header>Cabecera</el-header>
            <el-main>Principal</el-main>
            <el-footer>Pie de página</el-footer>
          </el-container>
        </el-container>
      </el-col>
    </el-row>
  </div>
</template>

<script>
export default {
  mounted() {
    console.log("Component mounted.");
  },
  name: "Productos view",
  data() {

  },
  methods: {

  }
};
</script>

<style scoped>
.el-row {
  margin-bottom: 20px;
}
div :last-child {
  margin-bottom: 0px;
}
.el-col {
  border-radius: 4px;
}
/* -----Container----- */
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
.el-header,
.el-footer {
  background-color: #b3c0d1;
  color: #333;
  text-align: center;
  line-height: 60px;
  height: 10px;
}
</style>