require('./bootstrap')

import { createApp } from 'vue';
import { createPinia } from 'pinia';
import VueGoogleMaps from '@fawmi/vue-google-maps';
import vSelect from 'vue-select'
import 'vue-select/dist/vue-select.css';



import PostAJob from './components/PostAJobComponent.vue';
import GridLoader from 'vue-spinner/src/GridLoader.vue';
const app = createApp({});
const pinia = createPinia();

app.use(pinia);
app.use(VueGoogleMaps, {
    load: {
      key: 'AIzaSyCC6BbwI05bsqkWZCStzkLIMquD8WL_wqU',
      libraries: "places",
      v: 'quarterly'
    },
  })
app.component('PostAJob', PostAJob);
app.component('GridLoader', GridLoader);

app.component('v-select', vSelect)

app.mount('#app');

