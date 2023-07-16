<script setup>
import { usePage } from "@inertiajs/vue3";
import Character from "./Character.vue";

const characters = usePage().props.characters;

</script>
<template>
    <div>
        <Character v-for="character in characters" :character="character"/>
    </div>
    
</template>
