import Vue from 'vue';
import VueRouter from 'vue-router';
import axios from 'axios';
import VueAxios from 'vue-axios';
import App from './App.vue';
import Dashboard from './components/Dashboard.vue';
import Home from './components/Home.vue';
import Register from './components/Register.vue';
import Login from './components/Login.vue';
import DashboardPelamar from './components/home/dashboardMenuPelamar.vue';
import Search from './components/home/search.vue';
import DetailPekerjaan from './components/home/detailPekerjaan.vue';
import TambahLowongan from './components/home/tambahLowongan.vue';
import ProfilePelamar from './components/home/profilPelamar.vue';


require('./bootstrap');
import Buefy from 'buefy';

//dari rio
window.Vue = require('vue');
window.VueRouter = require('vue-router').default;
Vue.use(Buefy,{defaultIconPack: 'fa'}, VueRouter, axios);
//
Vue.use(VueRouter);
Vue.use(VueAxios, axios);

axios.defaults.baseURL = 'http://infokerja2.thekingcorp.org/api';
const router = new VueRouter({
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/register',
            name: 'register',
            component: Register,
            meta: {
                auth: false
            }
        },
        {
            path: '/login',
            name: 'login',
            component: Login,
            meta: {
                auth: false
            }
        },
        {
            path: '/DashboardPelamar',
            name: 'DashboardPelamar',
            component: DashboardPelamar,
            meta: {
                auth: true
            },
            props: true
        },
        {
            path: '/dashboard',
            name: 'dashboard',
            component: Dashboard,
            meta: {
                auth: true
            }
        },
        {
            name: 'Search',
            path: '/Search',
            component: Search,
            meta: {
                auth: true
            },
            props: true
        },
        {
            name: 'DetailPekerjaan',
            path: '/detailPekerjaan',
            component: DetailPekerjaan,
            meta: {
                auth: true
            },
            props: true
        },
        {
            name: 'TambahLowongan',
            path: '/TambahLowongan',
            component: TambahLowongan,
            meta: {
                auth: true
            },
            props: true
        },
        {
            name: 'ProfilePelamar',
            path: '/ProfilePelamar',
            component: ProfilePelamar,
            meta: {
                auth: true
            },
            props: true
        }
    ]
});

Vue.router = router


Vue.router = router

Vue.use(require('@websanova/vue-auth'), {
  auth: require('@websanova/vue-auth/drivers/auth/bearer.js'),
  http: require('@websanova/vue-auth/drivers/http/axios.1.x.js'),
  router: require('@websanova/vue-auth/drivers/router/vue-router.2.x.js'),
})

App.router = Vue.router
///dari rio
// const AppLayout = Vue.component('app-layout', require('./components/App.vue'));
// Vue.config.productionTip = false;
// new Vue(
//     Vue.util.extend(
//         {router},
//         AppLayout
//     )
// ).$mount('#mainLayout');
///
new Vue(App).$mount('#app');