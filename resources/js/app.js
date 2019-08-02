/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router'
Vue.use(VueRouter)

let routes = [
    {
        path: '*',
        component: require('./components/Dashboard.vue').default
    },
    {
        path: '/profile',
        component: require('./components/Profile.vue').default
    },
    {
        path: '/chat',
        component: require('./components/Chat.vue').default
    },
    {
        path: '/setting',
        component: require('./components/Setting.vue').default
    },
    {
        path: '/report',
        component: require('./components/Report.vue').default
    },
    {
        path: '/download',
        component: require('./components/Download.vue').default
    },
    {
        path: '/registration',
        component: require('./components/Registration.vue').default
    },
    {
        path: '/dbadmin',
        component: require('./components/tables/DBAdmin.vue').default
    },
    {
        path: '/maintenance',
        component: require('./components/tables/Maintenance.vue').default
    },
    {
        path: '/employee',
        component: require('./components/tables/Employee.vue').default
    },
    {
        path: '/public',
        component: require('./components/tables/Public.vue').default
    },
    {
        path: '/agent',
        component: require('./components/tables/Agent.vue').default
    },
    {
        path: '/sub-agent',
        component: require('./components/tables/Sub-Agents.vue').default
    },
]

const router = new VueRouter({
    mode: 'history',
    routes
})


Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    router
});
