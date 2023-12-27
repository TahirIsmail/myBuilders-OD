import { createApp } from 'vue';
import { createPinia } from 'pinia';
import  VSelect  from "vue-select";
import TradeSinup from './components/TradeSinupComponent.vue';

const appT = createApp({});
const pinia = createPinia();

appT.use(pinia);

appT.component('TradeSinup', TradeSinup);

appT.component("v-select", VSelect);


export default appT;
