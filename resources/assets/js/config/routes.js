import Error404 from '../components/error404.vue'
import Home  from '../modules/ModuleHome/Home.vue'
import Renta  from '../modules/ModuleRenta/Renta.vue'
import Bicicletas  from '../modules/ModuleBicicletas/Bicicletas.vue'
import Catalogo from '../modules/ModuleCatalogo/Catalogo.vue'
import Producto from '../modules/ModuleProducto/Producto.vue'

import Marca from '../modules/ModuleConfig/Marca.vue'
import Componente from '../modules/ModuleConfig/Componente.vue'
import Medidas from '../modules/ModuleConfig/Medidas.vue'
import Material from '../modules/ModuleConfig/Material.vue'
import Modalidad from '../modules/ModuleConfig/Modalidad.vue'

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
        {
            path : prefix + "producto",
            name : "view-producto",
            component : Producto
        },
/*------------------------------------------------------------------------------------------------------------------------*/        
        {
            path : prefix + "marca",
            name : "view-marca",
            component : Marca
        },  
        {
            path : prefix + "componente",
            name : "view-componente",
            component : Componente
        },  
        {
            path : prefix + "medidas",
            name : "view-medidas",
            component : Medidas
        },
        {
            path : prefix + "material",
            name : "view-material",
            component : Material
        },  
        {
            path : prefix + "modalidad",
            name : "view-modalidad",
            component : Modalidad
        }        
];