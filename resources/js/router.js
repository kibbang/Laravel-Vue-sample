import Router from 'vue-router';

import Home from './views/Home.vue';
import About from './views/About.vue';
import Auth from './views/Auth/Auth.vue';

export default new Router({
  mode: 'history',
  routes: [
    {
      path: '/',
      name: 'home',
      component: Home
    },

    {
      path: '/about',
      name: 'about',
      component: About
    },

    {
      path: '/auth',
      name: 'auth',
      component: Auth
    }
  ]
});