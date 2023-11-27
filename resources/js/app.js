require('./bootstrap')

import { createApp } from 'vue'

import Example from './components/ExampleComponent'
import QuestionWithOptions from './components/QuestionWithOptionsComponent.vue';
import SignUpComponent from './components/SignUpComponent.vue';
import JobHeadlineComponent from './components/JobHeadlineComponent.vue';
const app = createApp({})

app.component('example', Example)
app.component('QuestionWithOptions', QuestionWithOptions)
app.component('SignUpComponent', SignUpComponent)
app.component('JobHeadlineComponent', JobHeadlineComponent)
app.mount('#app')
