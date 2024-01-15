// resources/js/router.js
import { createRouter, createWebHistory } from 'vue-router';


import Dashboard from './components/dashboard/Dashboard.vue';
import CreateEvent from './components/events/CreateEvent.vue';
import Events from './components/events/Events.vue';


const routes = [
  {
    path: '/',
    name: 'events',
    component: Events,
  },
  {
    path: '/create-event',
    name: 'create-event',
    component: CreateEvent,
  },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;
