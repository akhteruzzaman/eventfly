import { createApp } from 'vue/dist/vue.esm-bundler.js';
import router from './router';
//Components
import App from './components/App.vue';

import TopNavbar from './components/navbar/TopNavbar.vue';
import LeftNavbar from './components/navbar/LeftNavbar.vue';
import Events from './components/events/Events.vue';
import CreateEvent from './components/events/CreateEvent.vue';





const app = createApp({});
app.use(router); // Add this line

app.component('app', App);

app.component('top-navbar', TopNavbar);
app.component('left-navbar', LeftNavbar);
app.component('events', Events);
app.component('create-event', CreateEvent);



app.mount('#app');