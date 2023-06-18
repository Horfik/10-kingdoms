import {createStore} from "vuex";
import {useForm } from '@inertiajs/vue3';

export default createStore({
    state: () => ({
        master: localStorage.getItem('master')
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
            localStorage.removeItem('master')
            stage.master = null;
            form.post(route('logout'));
        },
    }
})
