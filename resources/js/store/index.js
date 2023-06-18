import {createStore} from "vuex";
import {useForm } from '@inertiajs/vue3';

export default createStore({
    state: () => ({
        master: false
    }),
    mutations: {
        setMaster(stage, user) {
            console.log(stage, user)
            if(user.role === 'master')
            {
                stage.master = true
            }
        },
        logout(stage) {
            const form = useForm({});
            stage.master = false;
            form.post(route('logout'));
        },
    }
})
