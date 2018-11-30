<template>
  <div>
    <el-row :gutter="10">
      <el-col :span="8">
        <el-container>
          <el-aside width="200px">Barra lateral</el-aside>
          <el-main>Principal</el-main>
        </el-container>
      </el-col>
      <el-col :span="8">
        <el-container>
          <el-aside width="200px">Barra lateral</el-aside>
          <el-main>Principal</el-main>
        </el-container>
      </el-col>
      <el-col :span="8">
        <el-container>
          <el-aside width="200px">Barra lateral</el-aside>
          <el-main>Principal</el-main>
        </el-container>
      </el-col>      
    </el-row>
  </div>
</template>

<script>
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
</style>