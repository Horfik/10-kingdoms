<script setup>
import {useForm} from "@inertiajs/vue3";
import {ref} from "vue";
import { useStore } from 'vuex';
import Plus from "@/Components/svg/Plus.vue";
import Minus from "@/Components/svg/Minus.vue";

const showSidebar = ref(true);

const openSidebar = () => {
    if(showSidebar.value)
    {
        showSidebar.value = false;
    }
    else
    {
        showSidebar.value = true;
    }
}
window.addEventListener('resize', event =>{
    if(window.innerWidth < 640)
    {
        showSidebar.value = false
    }
    else
    {
        showSidebar.value = true
    }
});

const store = useStore();

const form = useForm({
    age: store.state.character.age
})

const incrementAge = () => {
    form.age = store.state.character.age + 1;
    form.patch(route('character.update', store.state.character.id), {
        onSuccess: responce=>{    
            console.log(responce);
            store.commit('setAge', responce.props.character.age);
        },
        onError: () => {
            console.log("onError");
        }
    })
}

const incrementExperience = () => {
    store.commit('setExperience', 5);    
}

</script>

<template>
    <div id="sidebar" v-show="showSidebar" class="" >
        <div class="fixed top-0 left-0 w-64 h-full bg-gray-100 border-r border-gray-300">
            <div class="flex justify-end p-2 sm:hidden">
                <div class="cursor-pointer" @click="openSidebar()">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </div>
            </div>
            <div class="p-2 pt-4">
                <div class="font-bold">Общее</div>
                <ul class="font-semibold select-none">
                    <li class="cursor-pointer">
                        Персонаж {{ $store.state.character.name }}
                    </li>
                    <li class="flex justify-between">
                        <div>
                            Раса: {{ $store.state.character.race.name }}
                        </div>
                    </li>
                    <li class="flex justify-between">
                        <div>
                            Консепция: {{ $store.state.character.concept }}
                        </div>
                    </li>
                    
                    <li class="flex justify-between">
                        <div>
                            Опыт: {{ $store.state.character.experience }}
                        </div>
                        <div class="flex">
                            <Plus class="mr-1 cursor-pointer" @click="incrementExperience"/>
                            <Minus class="cursor-pointer"/>
                        </div>
                    </li>
                    <li class="flex justify-between">
                        <div>
                            Возраст: {{ $store.state.character.age }}
                        </div>
                        <div class="flex">
                            <Plus class="mr-1 cursor-pointer" @click="incrementAge"/>
                            <Minus class="cursor-pointer"/>
                        </div>
                    </li>
                    <li class="flex justify-between">
                        <div>
                            Богатство: {{ $store.state.character.money }}
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="block p-2 sm:hidden">
        <svg xmlns="http://www.w3.org/2000/svg" @click="openSidebar()" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                 stroke="currentColor"
                 class="w-8 h-8 text-gray-900 cursor-pointer">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>
    </div>
</template>
