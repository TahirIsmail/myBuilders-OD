require('./bootstrap')
import { createApp } from 'vue';
import { createPinia } from 'pinia';

import { VueTelInput } from 'vue-tel-input';
import 'vue-tel-input/vue-tel-input.css';
import VueGoogleMaps from '@fawmi/vue-google-maps';
import  VSelect  from "vue-select";


import { createRouter } from 'vue-router'

import MultiStepComponent from './components/MultiStepComponent.vue'



const app = createApp({});

const pinia = createPinia();

app.use(pinia);


app.use(VueGoogleMaps, {
    load: {
      key: 'AIzaSyCC6BbwI05bsqkWZCStzkLIMquD8WL_wqU',
      libraries: "places"
    },
  })
app.use(VueTelInput);
app.component("v-select", VSelect);
app.component("MultiStep",MultiStepComponent)

app.mount("#app");
