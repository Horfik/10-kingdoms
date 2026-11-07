import './bootstrap';

import {createApp} from "vue";
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



app.use(vuetify).use(router).mount('#app');
