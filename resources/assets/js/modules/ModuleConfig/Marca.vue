  <template>
  <div>
    <el-row :gutter="5" style="sticky;  top: 0;">
      <el-col :span="16">&nbsp</el-col>
      <el-col :span="4">
        <el-input placeholder="buscar" prefix-icon="el-icon-search" v-model="input21"></el-input>
      </el-col>
      <el-col :span="2">
        <el-dropdown split-button type="primary">Filtro
          <el-dropdown-menu slot="dropdown">
            <el-dropdown-item>Action 1</el-dropdown-item>
            <el-dropdown-item>Action 2</el-dropdown-item>
            <el-dropdown-item>Action 3</el-dropdown-item>
            <el-dropdown-item>Action 4</el-dropdown-item>
          </el-dropdown-menu>
        </el-dropdown>
      </el-col>
      <el-col :span="2">
        <el-button type="success" icon="el-icon-circle-plus"></el-button>
      </el-col>
    </el-row>

    <el-row>
      <el-table :data="tableData" style="width: 100%">
        <el-table-column prop="date" label="Fecha" width="180"></el-table-column>
        <el-table-column prop="name" label="Nombre" width="180"></el-table-column>
        <el-table-column prop="address" label="Dirección"></el-table-column>
      </el-table>
    </el-row>
  </div>
</template>

  <script>
export default {
  data() {
    return {
      tableData: [
        {
          date: "2016-05-03",
          name: "Marca",
          address: "No. 189, Grove St, Los Angeles"
        },
        {
          date: "2016-05-02",
          name: "Tom",
          address: "No. 189, Grove St, Los Angeles"
        },
        {
          date: "2016-05-04",
          name: "Tom",
          address: "No. 189, Grove St, Los Angeles"
        },
        {
          date: "2016-05-01",
          name: "Tom",
          address: "No. 189, Grove St, Los Angeles"
        }
      ]
    };
  }
};
</script>