import Vue from 'vue';
import VueRouter from 'vue-router';
import PostAJob from './components/PostAJobComponent.vue';
import SignUp from './components/SignUpComponent.vue';

Vue.use(VueRouter);

const routes = [
  { path: '/post-a-job', component: PostAJob },
  { path: '/sign-up', component: SignUp },
];

const router = new VueRouter({
  routes,
});

export default router;