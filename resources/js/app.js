import './bootstrap';
window.Vue = require('vue').default;
import { createApp, markRaw } from 'vue';
import router from "./router";
import App from './Components/App.vue'
import { createRouter, createWebHistory, useRoute } from 'vue-router';
import { createPinia } from 'pinia';
// import Vue from 'Vue'
// import { createRouter, createWebHistory } from 'vue-router';
// import App from './App.vue';
// import Home from '@/views/Home.vue';

// import App from './Components/StudentApp.vue';


const pinia = createPinia()

pinia.use(({store}) => {
    store.router = markRaw(router)
    store.route = markRaw(useRoute())
})

const app = createApp({

    
    components: {
        App,
       
    },
})

app.use(pinia)

app.use(router)
app.component
app.mount('#app')




