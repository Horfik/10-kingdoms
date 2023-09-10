<script setup>
const props = defineProps({
    mechanics: {
        type: Array,
        required: true,
    },
});

</script>
<template>
    <div class="grid grid-cols-1 gap-1 md:grid-cols-2">
        <div v-for="mechanic in mechanics" class="">
            <div class="p-1 text-xl font-bold text-gray-300 cursor-pointer hover:bg-indigo-900" @click="$store.dispatch('goto', mechanic.id)">
                {{ mechanic.name }}
            </div>
        </div>
    </div>
</template>
