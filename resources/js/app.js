

require('./bootstrap');

import Vue from 'vue'
import axios from 'axios'
import VueAxios from 'vue-axios'



Vue.use(VueAxios, axios)


Vue.component('post-property', require('./components/Post-property.vue').default);
Vue.component('find-property', require('./components/Find-property.vue').default);
Vue.component('welcome', require('./components/Welcome.vue').default);
Vue.component('navbar', require('./components/Navbar.vue').default);



const app = new Vue({
    el: '#app',
});

