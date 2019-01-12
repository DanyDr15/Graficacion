// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import App from './App'
import router from './router'

Vue.config.productionTip = false
 // Initialize Firebase
 var config = {
  apiKey: "AIzaSyCir_KTzf4zuXz8pl9qGWKbP70YA5x0BYI",
  authDomain: "cmsb-f043f.firebaseapp.com",
  databaseURL: "https://cmsb-f043f.firebaseio.com",
  projectId: "cmsb-f043f",
  storageBucket: "cmsb-f043f.appspot.com",
  messagingSenderId: "874953612400"
};
firebase.initializeApp(config);

/* eslint-disable no-new */
new Vue({
  el: '#app',
  router,
  components: { App },
  template: '<App/>'
})
