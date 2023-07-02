<script setup>

const props = defineProps({
    kingdom: {
        type: Object,
        required: true,
    }
})
</script>

<template>
    <div class="font-bold text-4xl text-yellow-300">{{kingdom.name}}</div>
    <div class="mt-2 text-xl">
        <span class="font-bold text-yellow-300">Столица: </span>{{kingdom.capital}}
    </div>
    <div class="mt-2 text-xl">
        <span class="font-bold text-yellow-300">Правитель: </span>{{kingdom.ruler}}
    </div>
    <div class="mt-2 text-xl">
        <span class="font-bold text-yellow-300">Основное население: </span>{{kingdom.population}}
    </div>
    <div class="mt-2 text-xl">
        <span class="font-bold text-yellow-300">Достопримечательности: </span>{{kingdom.attraction}}
    </div>
    <div class="mt-2 text-xl">
        <span class="font-bold text-yellow-300">Герб: </span>{{kingdom.emblem}}
    </div>
    <div class="mt-2 text-xl">
        {{kingdom.description}}
    </div>

</template>

