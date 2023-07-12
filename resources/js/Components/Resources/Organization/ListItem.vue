<script setup>
const props = defineProps({
    organizations: {
        type: Array,
        required: true,
    }
})
</script>
<template>
    <div v-for="organization in organizations">
        <div class="text-gray-300 p-1 text-xl font-bold cursor-pointer hover:bg-indigo-900 " @click="$store.dispatch('goto', organization.id)">
            {{ organization.name }}
        </div>
    </div>
</template>

