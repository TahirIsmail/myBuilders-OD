require('./bootstrap')

import { createApp } from 'vue';
import { createPinia } from 'pinia';
import  VSelect  from "vue-select";
import PostAJob from './components/PostAJobComponent.vue';

const app = createApp({});
const pinia = createPinia();

app.use(pinia);

app.component('PostAJob', PostAJob);

app.component("v-select", VSelect);
app.mount('#app');
