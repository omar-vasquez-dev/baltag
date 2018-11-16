<template>
      <el-row type="flex" class="row-bg" justify="space-between">
        <el-col :span="10">
            <el-button size="medium">ALTA GAMA</el-button>
        </el-col>
     
        <el-col :span="10" class="menuUserOptions">
              <el-button size="medium">
                logs
              </el-button>
                  <el-button plain disabled>name</el-button>
                <el-button size="medium">
                salir
              </el-button>
                <i class="el-icon-setting"></i>
        </el-col>
    </el-row>
</template>

<script>
    export default {
        name: "HeaderMenu",
        data() {
            return {
                key: "hola"
            }
        },
    }
</script>

<style scoped>

    .row-bg{
        margin: 15px 20px; 
    }
    
    .el-button{
        border: 0px;
        font-weight: 600 !important;
    }

    .menuUserOptions{
        text-align: right;
    }

</style>