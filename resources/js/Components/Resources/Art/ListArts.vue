<script setup>
const props = defineProps({
    arts: {
        type: Array,
        required: true,
    },
});

</script>
<template>
    <div v-for="art in arts">
        <div class="text-gray-300 p-1 text-xl font-bold cursor-pointer hover:bg-indigo-900" @click="$store.dispatch('goto', art.id)">
            {{ art.name }}
        </div>
    </div>
</template>
