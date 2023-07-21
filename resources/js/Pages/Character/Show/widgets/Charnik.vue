<script setup>
import Character from "../components/Character.vue";
import Attribute from "../components/Attribute.vue";
import Mind from "../components/Mind.vue";
import { useStore } from 'vuex';
import { usePage } from '@inertiajs/vue3';

const character = usePage().props.character;
const store = useStore();

//store.commit('character/setCharacter', character);
store.commit('setCharacter',character );


</script>
<template>
    <div class="grid grid-cols-1 xl:grid-cols-2">
        <div>
            <Character/>
            <Attribute/>
            <Mind/>
        </div>
        
    </div>
    
</template>
