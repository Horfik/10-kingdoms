import {createStore} from "vuex";
import {useForm } from '@inertiajs/vue3';

export default createStore({
    state: () => ({

    }),
    mutations: {
        logout(stage) {
            const form = useForm({});
            form.post(route('logout'));
        },
    }
})
