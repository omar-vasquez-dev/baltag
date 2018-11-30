<template>
    <div>
        <el-row :gutter="10">
            <el-col :span="12">q
            </el-col>
            <el-col :span="12">q
            </el-col>  
        </el-row>        
    </div>
</template>

<script>
    export default {
        name:"Renta view",

        data() {

        },
        methods:{

        }
    }
</script>

<style scoped>
  .el-row {
    margin-bottom: 20px;
  }
  div :last-child{
    margin-bottom: 0;
  }
  .el-col { 
    border-radius: 4px;
  }
</style>