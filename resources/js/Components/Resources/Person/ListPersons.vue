<script setup>
const props = defineProps({
    persons: {
        type: Array,
        required: true,
    },
});

</script>
<template>
    <div v-for="person in persons" class="">
        <div class="text-gray-300 p-1 text-xl font-bold cursor-pointer hover:bg-indigo-900" @click="$store.dispatch('goto', person.id)">
            {{ person.name }}
        </div>
    </div>
</template>
