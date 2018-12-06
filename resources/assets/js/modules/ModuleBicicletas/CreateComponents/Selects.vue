<template>
    <el-form :label-position="labelPosition" label-width="100px" :model="formLabelAlign">
    <el-form-item label="Modalidad">
        <el-select v-model="value" placeholder="Select">
            <el-option
            v-for="item in options"
            :key="item.value"
            :label="item.label"
            :value="item.value">
            </el-option>
        </el-select>
    </el-form-item>
    <el-form-item label="Medida">
       <el-select v-model="value" placeholder="Select">
            <el-option
            v-for="item in options"
            :key="item.value"
            :label="item.label"
            :value="item.value">
            </el-option>
        </el-select>
    </el-form-item>
    <el-form-item label="Material">
        <el-select v-model="value" placeholder="Select">
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

</style>