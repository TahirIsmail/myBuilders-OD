require('./bootstrap')

import { createApp } from 'vue';
import { createPinia } from 'pinia';
import  VSelect  from "vue-select";
import vueCountryRegionSelect from 'vue3-country-region-select'

import PostAJob from './components/PostAJobComponent.vue';
import GridLoader from 'vue-spinner/src/GridLoader.vue';
const app = createApp({});
const pinia = createPinia();

app.use(pinia);
app.use(vueCountryRegionSelect);
app.component('PostAJob', PostAJob);
app.component('GridLoader', GridLoader);

app.component("v-select", VSelect);
app.mount('#app');

