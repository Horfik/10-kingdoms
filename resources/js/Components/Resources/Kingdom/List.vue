<script setup>
const props = defineProps({
    kingdoms:{
        type: Array,
        required: true
    }
})
</script>
<template>
    <div v-for="kingdom in kingdoms" class="">
        <div class="text-gray-300 p-1 text-xl font-bold cursor-pointer hover:bg-indigo-900" @click="$store.dispatch('goto', kingdom.id)">
            {{ kingdom.name }}
        </div>
    </div>
</template>

