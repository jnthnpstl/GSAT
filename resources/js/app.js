import './bootstrap';
window.Vue = require('vue').default;
import { createApp } from 'vue';
import router from "./router";
import App from './Components/App.vue'

// import Vue from 'Vue'
// import { createRouter, createWebHistory } from 'vue-router';
// import App from './App.vue';
// import Home from '@/views/Home.vue';

// import App from './Components/StudentApp.vue';


const app = createApp({

    
    components: {
        App,
       



    },


    
    

}).use(router).mount('#app')




