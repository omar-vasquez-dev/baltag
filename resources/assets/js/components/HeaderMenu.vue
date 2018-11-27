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
            <el-button size="medium" @click.prevent = logoutApp>
                salir
            </el-button>
            <form id="logout-form" :action = currentUrl method="POST" style="display: none;">
               <input type='hidden' name='_token' :value= token>
            </form>
                <i class="el-icon-setting"></i>
        </el-col>
    </el-row>
</template>

<script>
    export default {
        name: "HeaderMenu",
        data() {
            return {
                token: "",
                currentUrl:""
            }
        },

        methods: {
            logoutApp() {   

                this.currentUrl = window.location.host + '/logout';

                document.getElementById('logout-form').submit()
            }
        },              

        created () {
            this.token = window.Laravel.csrfToken
        }
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