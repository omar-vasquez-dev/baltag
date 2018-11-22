<template>
    <div>

<el-container>
  <el-header>Nueva Bicicleta</el-header>
  <el-main>
<el-row :gutter="10">
    <el-col :span="12">
        <el-input placeholder="Descripcion" v-model="input"></el-input>
    </el-col>
    <el-col :span="12">
        <el-input placeholder="Descripcion" v-model="input"></el-input>
    </el-col>
</el-row>

<el-row :gutter="10">
    <el-col :span="24">
        <el-input type="textarea" :rows="6" placeholder="Please input" v-model="textarea"></el-input>
    </el-col>    
</el-row>


<el-row :gutter="10">
    <el-col :span="12">
        <el-input placeholder="Descripcion" v-model="input"></el-input>
    </el-col>
    <el-col :span="12">
        <el-input placeholder="Descripcion" v-model="input"></el-input>
    </el-col>
</el-row>

<el-row :gutter="10">
    <el-col :span="12">
        <el-input placeholder="Descripcion" v-model="input"></el-input>
    </el-col>
    <el-col :span="12">
        <el-input placeholder="Descripcion" v-model="input"></el-input>
    </el-col>
</el-row>

<el-row :gutter="10">
    <el-col :span="12">
        <el-input placeholder="Descripcion" v-model="input"></el-input>
    </el-col>
    <el-col :span="12">
        <el-input placeholder="Descripcion" v-model="input"></el-input>
    </el-col>
</el-row>

<el-row :gutter="10">

    <el-col :span="6">
        <el-select v-model="value" placeholder="Select" size="large">
            <el-option
                v-for="item in options"
                :key="item.value"
                :label="item.label"
                :value="item.value">
            </el-option>
        </el-select>
    </el-col>

    <el-col :span="6">
        <el-select v-model="value" placeholder="Select">
            <el-option
                v-for="item in options"
                :key="item.value"
                :label="item.label"
                :value="item.value">
            </el-option>
        </el-select>
    </el-col>
    <el-col :span="6">
        <el-select v-model="value" placeholder="Select">
            <el-option
                v-for="item in options"
                :key="item.value"
                :label="item.label"
                :value="item.value">
            </el-option>
        </el-select>
    </el-col>
    <el-col :span="6">
        <el-select v-model="value" placeholder="Select">
            <el-option
                v-for="item in options"
                :key="item.value"
                :label="item.label"
                :value="item.value">
            </el-option>
        </el-select>
    </el-col>
</el-row>

<el-row :gutter="10">
    <el-col :span="12">
        <el-button :span="8" type="success" plain>Guardar</el-button>
        <el-button :span="8" type="danger" plain>Cancelar</el-button>
    </el-col>
</el-row>



  </el-main>
</el-container>

    </div>  
</template>

<script>
    export default {
        name:"Bicicletas view",

        data() {
            return {
                nombre : "blog",

                options: [{
                    value: 'Option1',
                    label: 'Option1'
                    }, {
                    value: 'Option2',
                    label: 'Option2'
                    }, {
                    value: 'Option3',
                    label: 'Option3'
                    }, {
                    value: 'Option4',
                    label: 'Option4'
                    }, {
                    value: 'Option5',
                    label: 'Option5'
                }],     

            }
        },

        methods:{
            cambiarNombre(){
                this.nombre = "beto"
            }
        }
    }
</script>

<style scoped>
.el-header{
    text-align: center;
    font-size: 2em;
    color: white;
    background: #99a9bf;
}
.el-main{
    background: #d3dce6;
}

.el-row {
    margin-bottom: 10px;
    &:last-child {
      margin-bottom: 0;
    }
  }
</style>