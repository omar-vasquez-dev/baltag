<template>
    <div>

<el-container>
  <el-header>Nueva Bicicleta</el-header>
  <el-main>
<el-row :gutter="10">
    <el-col :span="12">
        Marca
        <el-input placeholder="Descripcion" v-model="input"></el-input>
    </el-col>
    <el-col :span="12">
        Modelo
        <el-input placeholder="Descripcion" v-model="input"></el-input>
    </el-col>
</el-row>

<el-row :gutter="10">
    <el-col :span="24">
        Descripción
        <el-input type="textarea" :rows="6" placeholder="Please input" v-model="textarea"></el-input>
    </el-col>    
</el-row>


<el-row :gutter="10">
    <el-col :span="12">
        Modalidad
        <el-input placeholder="Descripcion" v-model="input"></el-input>
    </el-col>
    <el-col :span="12">
        Capacidad
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

    <el-col :span="6">
        <el-color-picker v-model="color4"></el-color-picker>
    </el-col>

</el-row>

<el-row :gutter="10">
    <el-col :span="12">
        <el-button type="success" plain @click="guardarMessage()">Guardar</el-button>
    </el-col>
    <el-col :span="12">
        <el-button type="danger" plain>Cancelar</el-button>
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
                color4: '#409EFF',
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
            },
            guardarMessage(){
                this.$confirm('¿Desea guardar los datos?', '', {
                    confirmButtonText: 'Si',
                    cancelButtonText: 'No',
                    type: 'warning'
                    }).then(() => {
                        this.$message({
                            type: 'success',
                            message: 'Datos guardados correctamente'
                        });
                    }).catch(() => {
                        this.$message({
                            type: 'info',
                            message: 'Los datros no se han guardado'
                        });          
                    });
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
.el-select{
    width: 100%;
}
.el-button{
    width: 100%;  
}
</style>