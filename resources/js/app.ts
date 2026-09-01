import './bootstrap';

import {createApp} from "vue";
import App from "./app.vue";

//vuetify
import 'vuetify/styles';
import { createVuetify } from 'vuetify';
import * as components from 'vuetify/components';
import * as directives from 'vuetify/directives';


const app = createApp(App);

const vuetify = createVuetify({
    components,
    directives,
})

app.use(vuetify).mount('#app');
