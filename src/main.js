import 'bootstrap/dist/css/bootstrap.min.css'
import 'font-awesome/css/font-awesome.css'
import './css/collections.css'
import './css/master.css'
import './css/index.css'
import 'bootstrap'
import Collections from './Collections.vue'
import Vue from 'vue'
import VueImg from 'v-img'

new Vue({
  el: '#app',
  render: h => h(Collections)
});

Vue.use(VueImg, {
    altAsTitle: false,
});
