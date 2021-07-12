
require('./bootstrap');

window.Vue=require('vue');

//Login
Vue.component('login',require('./components/auth/Login.vue').default);


const app = new Vue({
    el: '#app',
});
