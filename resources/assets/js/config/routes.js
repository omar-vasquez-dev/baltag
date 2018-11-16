import Home  from '../modules/ModuleHome/Home.vue'
import Renta  from '../modules/ModuleRenta/Renta.vue'
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
];