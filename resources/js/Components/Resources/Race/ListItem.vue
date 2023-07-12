<script setup>
const props = defineProps({
    races: {
        type: Array,
        required: true,
    }
})
</script>
<template>
    <div v-for="race in races">
        <div class="text-gray-300 p-1 text-xl font-bold cursor-pointer hover:bg-indigo-900 " @click="$store.dispatch('goto', race.id)">
            {{ race.name }}
        </div>
    </div>
</template>

