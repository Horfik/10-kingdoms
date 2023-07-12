<script setup>

const props = defineProps({
    race: {
        type: Object,
        required: true,
    }
})
</script>

<template>
    <div class="font-bold text-4xl text-yellow-300">{{race.name}}</div>
    <div class="mt-2 text-xl whitespace-pre-line">
        {{race.description}}
    </div>
    <div v-if="race.talent" class="mt-2 text-xl whitespace-pre-line">
        <span class="font-bold text-yellow-300">Право рождения:</span> {{race.talent}}
    </div>

</template>

