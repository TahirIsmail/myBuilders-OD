require('./bootstrap')

import { createApp } from 'vue'

import Example from './components/ExampleComponent'
import QuestionWithOptions from './components/QuestionWithOptionsComponent.vue';
const app = createApp({})

app.component('example', Example)
app.component('QuestionWithOptions', QuestionWithOptions)
app.mount('#app')