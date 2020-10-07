require('./bootstrap');

import Vue from 'vue'
import login from './login'
import router from './routes'

const app = new Vue({
    el: '#login',
    router,
    render: h=> h(login)
});
