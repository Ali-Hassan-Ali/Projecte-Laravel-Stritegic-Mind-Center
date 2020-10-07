require('./bootstrap');

import Vue from 'vue'
import Min from './Min'
import router from './routes'

const app = new Vue({
    el: '#app',
    router,
    render: h=> h(Min,login)
});
