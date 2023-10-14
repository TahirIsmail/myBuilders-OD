require('./bootstrap')

import { createApp } from 'vue'
import { VueSelect } from "vue-select"
import Example from './components/ExampleComponent'

const app = createApp({})

app.component('example', Example)

app.mount('#app')