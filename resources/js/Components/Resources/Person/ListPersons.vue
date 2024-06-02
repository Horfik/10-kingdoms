<script setup>
const props = defineProps({
    persons: {
        type: Object,
        required: true,
    },
    homes: {
        type: Object,
        required: true,
    },
});

</script>
<template>
    <div v-for="(home, index) in homes" class="">
        <div v-if="persons[index]" class="mt-2 text-2xl font-semibold text-yellow-300 ">{{ home }}</div>
        <div class="grid gap-1 grid-cols-1 md:grid-cols-2 lg:grid-cols-4">
            <div v-for="person in persons[index]"
                 class="text-gray-300 p-1 text-xl font-bold cursor-pointer hover:bg-indigo-900 "
                 @click="$store.dispatch('goto', person.id)">
                {{ person.name }}
            </div>
        </div>
    </div>
</template>
