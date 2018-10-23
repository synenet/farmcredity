
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('admin-lte');
window.Vue = require('vue');

window.Form = Form
import {Form, HasError, AlertError} from 'vform'
import VueProgressBar from 'vue-progressbar'


//Sweet Alert2 plugin
import swal from 'sweetalert2'

window.swal = swal


//To fire on Vue


window.Fire = Vue;

const toast = swal.mixin({
	toast : true,
	position: 'top-end',
	showConfirmButton: false,
	timer: 3000
})

window.toast = toast

Vue.use(VueProgressBar, {
	'color':'rgb(143,255, 199)',
	'failedColor': 'red',
	'height': '3px'
	});

Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)

//Laravel Pssport Vue Components

Vue.component(
    'passport-clients',
    require('./components/passport/Clients.vue')
);

Vue.component(
    'passport-authorized-clients',
    require('./components/passport/AuthorizedClients.vue')
);

Vue.component(
    'passport-personal-access-tokens',
    require('./components/passport/PersonalAccessTokens.vue')
);



import VueRouter from 'vue-router'
import moment from 'moment'
Vue.use(VueRouter)

const routes = [
{path: '/dashboard', component: require('./components/Dashboard.vue')},
{path: '/profile', component: require('./components/Profile.vue')},
{path: '/users', component: require('./components/Users.vue')},
{path: '/developer', component: require('./components/Developer.vue')},
{path: '/application', component: require('./components/application/Application.vue')},
{path: '/personal', component: require('./components/application/Personal.vue')},
{path: '/company', component: require('./components/application/Company.vue')},
{path: '/loan', component: require('./components/application/Loan.vue')},
{path: '/requirements', component: require('./components/application/Requirements.vue')},

]

Vue.filter('cleanDate', function(created){
	return moment(created).format('MMMM DD YYYY, h:mm:ss a')
	

})

Vue.filter('neatDate', function(created){
	
	return moment().format('lll');

})

const router = new VueRouter({
	mode: 'history',
	routes
})
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app',
    router
});
