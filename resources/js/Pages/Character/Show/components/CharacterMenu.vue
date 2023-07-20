<script setup>
import {useForm} from "@inertiajs/vue3";
import {onMounted} from "vue";
import { useStore } from 'vuex';
import Accordion from "@/Components/UI/Accordion.vue";
import Experience from '../features/character/Experience.vue';
import Age from '../features/character/Age.vue';
import Money from '../features/character/Money.vue';

const store = useStore();

const form = useForm({
    age: '',
    experience: '',
    concept: '',
    name: '',
    player: '',
    race_id: '',
    money: '',
})

const updateCharacter = () => {
    form.patch(route('character.update', store.state.character.id), {
        onSuccess: responce=>{    
            store.commit('setCharacter', responce.props.character);
        },
        onError: () => {
            console.log("onError");
        }
    })
}
onMounted(
    () => {
        form.age = store.state.character.age;
        form.experience = store.state.character.experience;
        form.concept = store.state.character.concept;
        form.name = store.state.character.name;
        form.player = store.state.character.player;
        form.race_id = store.state.character.race.id;
        form.money = store.state.character.money;
    }
)


</script>
<template>
    <div>
        <Accordion title="Общее">
            <ul class=" select-none">
                <li class="cursor-pointer border-b border-gray-500 p-1">
                    <span class="font-semibold">Персонаж</span> {{ $store.state.character.name }}
                </li>
                <li class="flex justify-between border-b border-gray-500 p-1">
                    <div>
                        <span class="font-semibold">Раса:</span> {{ $store.state.character.race.name }}
                    </div>
                </li>
                <li class="flex justify-between border-b border-gray-500 p-1">
                    <div>
                        Консепция: {{ $store.state.character.concept }}
                    </div>
                </li>
                <Experience :updateCharacter="updateCharacter" v-model="form.experience" class="border-b border-gray-500 p-1"/>
                <Age :updateCharacter="updateCharacter" v-model="form.age" class="border-b border-gray-500 p-1"/>
                <Money :updateCharacter="updateCharacter" v-model="form.money"/>
                
            </ul>
        </Accordion>
        
    </div>
    
    
</template>
