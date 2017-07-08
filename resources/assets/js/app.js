/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import VueRouter from 'vue-router';
import routes from './routes';

Vue.use(VueRouter);
Vue.use(Vuetify);

Vue.component('example', require('./components/Example.vue'));
Vue.component('login', require('./layouts/App.vue'));

const router = new VueRouter({
	mode: 'history',
	base: __dirname,
	routes
});

const app = new Vue({
	el: '#app',
	data: {
		currentRoute: window.location.pathname
	},
	computed: {
		ViewComponent() {
			const matchingView = routes[this.currentRoute];

			return matchingView ? require('./pages/' + matchingView + '.vue') : require('./pages/404.vue');
		}
	},
	render(h) {
		return h(this.ViewComponent);
	}
});

window.addEventListener('popstate', () => {
	app.currentRoute = window.location.pathname;
});