<template>
    <el-form :label-position="labelPosition" label-width="150px" :model="formLabelAlign">

    <el-form-item :label="$getText('bicicleta_description')" prop="desc" class="textAreaDescripcion">
        <el-input type="textarea" v-model="value"></el-input>
    </el-form-item>

    <el-form-item label="Genero " prop="resource">
        <el-radio-group v-model="genero">
            <el-radio label="UNISEX"></el-radio>
            <el-radio label="HOMBRE"></el-radio>
            <el-radio label="MUJER"></el-radio>
        </el-radio-group>
    </el-form-item>

    <el-form-item label="Modalidad">
        <el-select v-model="value" placeholder="Select" class="inputSelects">
            <el-option
            v-for="item in options"
            :key="item.value"
            :label="item.label"
            :value="item.value">
            </el-option>
        </el-select>
    </el-form-item>
    <el-form-item label="Medida">
       <el-select v-model="value" placeholder="Select" class="inputSelects">
            <el-option
            v-for="item in options"
            :key="item.value"
            :label="item.label"
            :value="item.value">
            </el-option>
        </el-select>
    </el-form-item>
    <el-form-item label="Material">
        <el-select v-model="value" placeholder="Select" class="inputSelects">
            <el-option
            v-for="item in options"
            :key="item.value"
            :label="item.label"
            :value="item.value">
            </el-option>
        </el-select>
    </el-form-item>

     
    </el-form>
</template>

<script>
    export default {
        data() {
            return {
                labelPosition: 'top',
                genero:"",
                formLabelAlign: {
                name: '',
                region: '',
                type: ''
                },
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
                value: ''
            }
        },
    }
</script>

<style scoped>
  .el-radio{
    font-weight: 600;
    font-family: 'Nunito', sans-serif;
  }
  .textAreaDescripcion{
      max-width: 400px;
  }

  .inputSelects{
      min-width: 400px;
  }
</style>    