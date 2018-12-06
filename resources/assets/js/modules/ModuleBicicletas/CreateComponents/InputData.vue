<template>
    <el-container>
        <el-card class="box-card">
      <div slot="header" class="clearfix">
        <span>Nueva Bicicleta</span>
        <el-button style="float: right; padding: 3px 0" type="text">Operation button</el-button>
      </div>
      <!-- form @submit="formSubmit" -->
      <el-row :gutter="10">
        <el-col :span="12">Marca
          <el-input placeholder="Descripcion" size="large" v-model="marca"></el-input>
        </el-col>
        <el-col :span="12">Medida
          <el-select v-model="medida_id" placeholder="Select">
            <el-option
              v-for="item in options"
              :key="item.value"
              :label="item.label"
              :value="item.value"
            ></el-option>
          </el-select>
        </el-col>
      </el-row>

      <el-row :gutter="10">
        <el-col :span="12">Modelo
          <el-input placeholder="Descripcion" v-model="modelo"></el-input>
        </el-col>
        <el-col :span="12">Material
          <el-select v-model="material_id" placeholder="Select">
            <el-option
              v-for="item in options"
              :key="item.value"
              :label="item.label"
              :value="item.value"
            ></el-option>
          </el-select>
        </el-col>
      </el-row>

      <el-row :gutter="10">
        <el-col :span="12">Género
          <el-input placeholder="Descripcion" v-model="genero"></el-input>
        </el-col>
        <el-col :span="12">Modalida
          <el-select v-model="modalidad_id" placeholder="Select">
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
        <el-col :span="12">Modalidad
          <el-input placeholder="Descripcion" v-model="modalidad"></el-input>
        </el-col>
        <el-col :span="12"></el-col>
      </el-row>

      <el-row :gutter="10">
        <el-col :span="12">Velocidad
          <el-input placeholder="Descripcion" v-model="velocidad"></el-input>
        </el-col>
        <el-col :span="12"></el-col>
      </el-row>

      <el-row :gutter="10">
        <el-col :span="12">Material
          <el-input placeholder="Descripcion" v-model="material"></el-input>
        </el-col>
        <el-col :span="12"></el-col>
      </el-row>

      <el-row :gutter="10">
        <el-col :span="12">Rodada
          <el-input placeholder="Descripcion" v-model="rodada"></el-input>
        </el-col>
        <el-col :span="12"></el-col>
      </el-row>

      <el-row :gutter="10">
        <el-col :span="12">Capacidad
          <el-input placeholder="Descripcion" v-model="capacidad"></el-input>
        </el-col>
        <el-col :span="12"></el-col>
      </el-row>

      <el-row :gutter="10">
        <el-col :span="12">Modelaje
          <el-input placeholder="Descripcion" v-model="modelaje"></el-input>
        </el-col>
        <el-col :span="12">
        </el-col>
      </el-row>
      <el-row :gutter="10">
        <el-col :span="12">Descripcion
          <el-input type="textarea" :rows="2" placeholder="Please input" v-model="descripcion"></el-input>
        </el-col>
        <el-col :span="12"></el-col>
      </el-row>

      <el-row :gutter="10">
        <el-col :span="6">&nbsp</el-col>
        <el-col :span="6">&nbsp</el-col>
        <el-col :span="6">
          <!-- el-button type="text" @click="guardarMessage(0)">Cancelar</el-button  -->
          <el-button type="text" style="color:red;">Cancelar</el-button>
          <div></div>
        </el-col>
        <el-col :span="6">
          <!-- el-button type="danger" plain @click="guardarMessage(0)">Cancelar</el-button  -->
          <el-button type="success" plain @click="formSubmit">Guardar</el-button>
          <!-- <el-button type="success" @click="formSubmit">Guardar</el-button>  -->
        </el-col>
      </el-row>
      <!-- /form -->
    </el-card>
  </el-container>
</template>

<script>
    export default {
        
    }
</script>

<style scoped>

</style>