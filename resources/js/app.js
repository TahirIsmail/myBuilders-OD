require('./bootstrap')

import { createApp } from 'vue';
import { createPinia } from 'pinia';

import VueGoogleMaps from '@fawmi/vue-google-maps';
import vSelect from 'vue-select'

import 'vue-select/dist/vue-select.css';




import PostAJob from './components/PostAJobComponent.vue';
import CardDetails from './components/CardDetailsComponent.vue';
import StripeCard from './components/StripeCardElement.vue';
import VueTheMask from 'vue-the-mask'

const app = createApp({});
const pinia = createPinia();

app.use(pinia);
app.use(VueTheMask)

app.use(VueGoogleMaps, {
    load: {
      key: 'AIzaSyCC6BbwI05bsqkWZCStzkLIMquD8WL_wqU',
      libraries: "places",
      v: 'quarterly'
    },
  })
app.component('PostAJob', PostAJob);
app.component('CardDetails',CardDetails)
app.component('StripeCard', StripeCard)
app.component('v-select', vSelect)
app.component('pulse-loader', require('vue-spinner/src/PulseLoader.vue'));
app.mount('#app');

