import {createStore} from "vuex";
import {useForm } from '@inertiajs/vue3';

export default createStore({
    state: () => ({
        deleteModal: false,
        deleteItem: null
    }),
    mutations: {
        logout() {
            const form = useForm({});
            form.post(route('logout'));
        },
        openModal(state, deleteItem){
            console.log(state, deleteItem)
            if(!state.deleteModal)
            {
                state.deleteModal = true;
            }
            state.deleteItem = deleteItem;
        },
        closeModal(state){
            if(state.deleteModal)
            {
                state.deleteModal = false;
            }
            state.deleteItem = null;
        },
    },
    actions:{
        deleteItem(context, {routeName, callback} ){
            const form = useForm({});
            form.delete(route(routeName, context.state.deleteItem),{
                onSuccess: ()=>{
                    callback();
                    context.commit("closeModal");
                }
            });
        },
        goto(context, id){
            location.href = "#show-" + id;
        }
    }
})
