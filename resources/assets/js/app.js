
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
import Vue from 'vue'
import Element from 'element-ui'
import '../sass/_variables.scss'
import App from './App.vue'
import lang from 'element-ui/lib/locale/lang/es'
import locale from 'element-ui/lib/locale'
import repo from './utils/lang'


Vue.use(Element)

// 1. Search name routes general.
window.Vue.prototype.$routeLaravel = function (nameRoute = '', params = {}) {

  if (typeof window.Laravel.routes === 'undefined' || window.Laravel.routes === null) {
      console.error('Routes undefined in app vue')
      return

  } else {

      let item = window.Laravel.routes.find(item => item.name === nameRoute);

      if (typeof item === 'undefined' || item.uri === null) {
          console.error('Not route exist')
          return
      }

      var url = item.uri

      for (var indice in params) {
          let reg = new RegExp('{' + indice + '}', 'g');
          url = url.replace(reg, params[indice]);
      }

      return url;
  }
}


//Configuracion del repositorio
const configRepository ={
    language_def: 'es',
    language:{
        es: require('./values/string/es/string.json'),
        en: require('./values/string/en/string.json')
    }
}


 Vue.use(repo,configRepository)


// configure language
locale.use(lang)

new Vue({
  el: '#app',
  render: h => h(App)
});