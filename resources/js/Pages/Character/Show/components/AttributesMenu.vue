<script setup>
import {useForm} from "@inertiajs/vue3";
import {onMounted} from "vue";
import { useStore } from 'vuex';
import Accordion from "@/Components/UI/Accordion.vue";
import Experience from '../features/character/Experience.vue';
import Age from '../features/character/Age.vue';
import Money from '../features/character/Money.vue';
import Concept from '../features/character/Concept.vue';
import Name from '../features/character/Name.vue';
import Race from '../features/character/Race.vue';

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
        onSuccess: response=>{    
            store.commit('setCharacter', response.props.character);
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
                <Name :updateCharacter="updateCharacter" v-model="form.name"/>
                <Race :updateCharacter="updateCharacter" v-model="form.race_id"/>
                <Concept :updateCharacter="updateCharacter" v-model="form.concept"/>
                <Experience :updateCharacter="updateCharacter" v-model="form.experience" class="border-b border-gray-500 p-1"/>
                <Age :updateCharacter="updateCharacter" v-model="form.age"/>
                <Money :updateCharacter="updateCharacter" v-model="form.money"/>
                
            </ul>
        </Accordion>
        
    </div>
    
    
</template>
