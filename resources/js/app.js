require('./bootstrap')

import { createApp } from 'vue';
import { createPinia } from 'pinia';
import Swal from 'sweetalert2';
import VueSweetalert2 from 'vue-sweetalert2';
import 'sweetalert2/dist/sweetalert2.min.css';
import  VSelect  from "vue-select";


import PostAJob from './components/PostAJobComponent.vue';

const app = createApp({});
const pinia = createPinia();

app.use(pinia);
app.use(VueSweetalert2, { Swal });

app.component('PostAJob', PostAJob);

app.component("v-select", VSelect);

app.mount('#app');
