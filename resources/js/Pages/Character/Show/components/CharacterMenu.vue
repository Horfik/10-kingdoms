<script setup>
import {useForm} from "@inertiajs/vue3";
import {onMounted} from "vue";
import { useStore } from 'vuex';
import Experience from '../features/character/Experience.vue';
import Age from '../features/character/Age.vue';
const store = useStore();

const form = useForm({
    age: '',
    experience: '',
    concept: '',
    name: '',
    player: '',
    race_id: '',
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
    }
)


</script>
<template>
    <div>
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
            <Experience :updateCharacter="updateCharacter" v-model="form.experience"/>
            <Age :updateCharacter="updateCharacter" v-model="form.age"/>
            <li class="flex justify-between">
                <div>
                    Богатство: {{ $store.state.character.money }}
                </div>
            </li>
        </ul>
    </div>
    
    
</template>
