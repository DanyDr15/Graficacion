import Vue from 'vue';
import 'bootswatch/dist/superhero/bootstrap.css';

import App from './App.vue';
import router from './router';
import Dashboard from './Dashboard.Vue';
Vue.config.productionTip = false;

new Vue({
  router,
  render: h => h(Dashboard),
}).$mount('#app');
