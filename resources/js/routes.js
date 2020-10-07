import VueRoute from 'Vue-router'
import Vue from 'vue'

import index from './components/index'
import all from './components/pages/allpdf'
import upload from './components/pages/uploade'
import Own from './components/pages/own'

import login from './components/login/login'

const routes = [
    { path: '/MyOwnOffice', component: Own },
    { path: '/uploadPDF', component: upload },
    { path: '/all', component: all },
    { path: '/', component: index },

    { path: '/login', component: login },
];

Vue.use(VueRoute);

const router = new VueRoute({
    routes,
    mode:'history'
});

export default router
