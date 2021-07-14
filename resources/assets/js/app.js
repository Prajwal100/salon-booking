import Vue from 'vue';
import Vuelidate from "vuelidate";

require('./bootstrap');

window.Vue=require('vue');
window.VeeValidate=require('vee-validate');

Vue.use(VeeValidate);
Vue.use(Vuelidate);

//Vue toasted msg
import  Toasted from 'vue-toasted';
import {req} from "vuelidate/lib/validators/common";

Vue.use(Toasted);

//For success message
let success={
    theme:"toasted_primary",
    position:"top-right",
    duration:4000,
};
//Register the toast with the custom message
Vue.toasted.register('success',(payload) => {
    return payload.message;
},success);

//Error messages example
let errors = {
    type: 'error',
    theme: "toasted-primary",
    position: "top-right",
    duration: 4000
};

//Register the toast with the custom message
Vue.toasted.register('error',
    (payload) => {
        // if there is no message passed show default message
        if (!payload.message) {
            return "Something Went Wrong.."
        }

        // if there is a message show it with the message
        return payload.message;
    },
    errors
);

//Login
Vue.component('login-form',require('./components/auth/Login').default);

//Register
Vue.component('register-form',require('./components/auth/Register').default);

//Dashboard
Vue.component('dashboard',require('./components/Dashboard/Dashboard').default);

//Navbar
Vue.component('nav-bar',require('./components/include/Navbar').default);

//sidebar
Vue.component('side-bar',require('./components/include/Sidebar').default);

//services
Vue.component('service-index',require('./components/service/Index').default);

//clients
Vue.component('client-index',require('./components/client/Index').default);


//custom components
Vue.component('common-submit-button',require('./components/CommonComponents/submitButton').default);

//Datatable components
Vue.component('datatable-component',require('./components/datatable/Datatable').default);
const app = new Vue({
    el: '#app',
});
