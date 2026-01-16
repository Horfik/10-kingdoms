import './bootstrap';

import {createApp} from "vue";
import App from "./app.vue";



const app = createApp(App);
//app.component('welcome', App);
app.mount('#app');
