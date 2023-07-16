<script setup>
import Character from "../components/Character.vue"
import { useStore } from 'vuex';
import { usePage } from '@inertiajs/vue3';

const character = usePage().props.character;
const store = useStore();

//store.commit('character/setCharacter', character);
store.commit('setCharacter',character );


</script>
<template>
    <Character/>
</template>
