import Error404 from '../components/error404.vue'
import Home  from '../modules/ModuleHome/Home.vue'
import Renta  from '../modules/ModuleRenta/Renta.vue'
import Bicicletas  from '../modules/ModuleBicicletas/Bicicletas.vue'
import Catalogo from '../modules/ModuleCatalogo/Catalogo.vue'

const prefix = "/dashboard/";

export default  
[
        /**
         * Error 404 default base
         */
        {
            path: '*',
            name: "view-error-404",
            component: Error404
        },
        {
            path: prefix + "home",
            name: "view-home",
            component: Home
        },
        {
            path: prefix + "renta",
            name: "view-renta",
            component: Renta
        },
        {
            path : prefix + "bicicletas",
            name : "view-bicicletas",
            component : Bicicletas
        },
        {
            path : prefix + "catalogo",
            name : "view-catalogo",
            component : Catalogo
        },       
];