import Home  from '../modules/ModuleHome/Home.vue'
import Renta  from '../modules/ModuleRenta/Renta.vue'
import Bicicletas  from '../modules/ModuleBicicletas/Bicicletas.vue'
const prefix = "/";

export default  
[
        {
            path: prefix + "home",
            name: "view_home",
            component: Home
        },
        {
            path: prefix + "renta",
            name: "view_renta",
            component: Renta
        },
        {
            path : prefix + "bicicletas",
            name : "view_bicicletas",
            component : Bicicletas
        },
];