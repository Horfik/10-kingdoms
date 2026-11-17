import './bootstrap';

import {createApp} from "vue";
import {createPinia, Pinia} from "pinia";
import App from "./app.vue";

//vuetify
import 'vuetify/styles';
import { createVuetify } from 'vuetify';
import * as components from 'vuetify/components';
import * as directives from 'vuetify/directives';
import router from "@/js/router";


const app = createApp(App);

const vuetify = createVuetify({
    components,
    directives,
})

const pinia: Pinia = createPinia();

app.use(vuetify).use(router).use(pinia).mount('#app');
