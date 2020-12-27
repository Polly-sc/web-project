import Vue from 'vue'
import App from './App.vue'
import Axios from 'axios'
import router from './router'
import store from './store'
import 'materialize-css/dist/js/materialize.min'

Vue.config.productionTip = false

Vue.prototype.$http = Axios.create({
  baseURL: 'http://localhost:1199/api/v1'
})

new Vue({
  router,
  store,
  render: h => h(App)
}).$mount('#app')

