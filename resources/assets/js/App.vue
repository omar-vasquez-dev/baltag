<template>
    <el-container class="app-container">
    
    <el-container>
        <el-aside width="200px" class="aside-menu shadowCard">
            <menu-lateral @clickItemView = changeView />
        </el-aside>
        <el-container>
            <el-header class="app-header">
                <header-menu/>
            </el-header>
            <el-main>
                <router-view></router-view>
            </el-main>
            <!-- 
            <el-footer>
            </el-footer> -->
        </el-container>
    </el-container>
    </el-container>
</template>

<script>
import Vue from 'vue'
import VueRouter from 'vue-router'
import MenuLateral from './components/MenuLateral.vue'
import HeaderMenu from './components/HeaderMenu.vue'
import config from './config/config.js'

//Import menu.
Vue.use(VueRouter)

    export default {
        router: new VueRouter({
            mode: 'history',
            routes: config.routes,
        }),

        components:{
            MenuLateral,
            HeaderMenu
        },

        methods:{
            /**
             * 
             * Carga la vista en router.
             * 
             * @param String view
             * @return Router
             */
            changeView( StringViewChange ){
                this.$router.push( { name: StringViewChange} )
            }
        },
        
        /**
         * Inicializamos el dashboard
         * con la ruta que manada el controlador.
         */
        mounted(){
            this.$router.push(window.Laravel.route_base)
        }
    }
</script>

<style scoped>
    .app-container{
        height: 100vh;
        padding: 0px !important;
    }
    
    .el-footer{
        background: #F6F8F9;
    }

    .shadowCard{
        box-shadow: 0 2px 2px 0 rgba(0,0,0,0.14), 0 3px 1px -2px rgba(0,0,0,0.12), 0 1px 5px 0 rgba(0,0,0,0.2);
    }

    .app-header{
        /**background: #484F80; */
        padding: 0px 0px;
        box-shadow: 0 2px 2px 0 rgba(0,0,0,0.14), 0 3px 1px -2px rgba(0,0,0,0.12), 0 1px 5px 0 rgba(0,0,0,0.2);
    }

    .el-main{
        background: #F0F0F7;
    }
    .el-header{
      border-bottom: 1px solid #e5e9f2;
    }
</style>