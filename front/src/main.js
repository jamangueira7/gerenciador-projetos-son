// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import App from './App'
import router from './router'
import Vuetify from 'vuetify'
import 'vuetify/dist/vuetify.min.css';
import 'material-design-icons-iconfont/dist/material-design-icons.css';
import store from './store';

Vue.config.productionTip = false

Vue.use(Vuetify);

//eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MTA4OTAzNTcsImV4cCI6MTYxMDk3Njc1NywidXNlciI6eyJpZCI6MywibmFtZSI6IkpvXHUwMGUzbyBNYW5ndWVpcmEiLCJlbWFpbCI6ImpvYW9Aam9hby5jb20iLCJjcmVhdGVkIjpudWxsLCJtb2RpZmllZCI6bnVsbH19.yVExZu_qSLaJOZeYGBSejH2jh0TSh7cJwrW-mk-p48U

/* eslint-disable no-new */
new Vue({
  el: '#app',
  router,
  store,
  components: { App },
  template: '<App/>'
})
