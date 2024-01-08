require('./bootstrap')
import { createApp } from 'vue';
import { createPinia } from 'pinia';
import  VSelect  from "vue-select";


import { createRouter } from 'vue-router'
import MultiStepComponent from './components/MultiStepComponent.vue'



const app = createApp({});
const pinia = createPinia();

app.use(pinia);



app.component("v-select", VSelect);
app.component("MultiStep",MultiStepComponent)

app.mount("#app");
