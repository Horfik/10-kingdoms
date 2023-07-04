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
        <div class="text-gray-300 p-1 text-xl font-bold cursor-pointer hover:bg-indigo-900">
            <a :href="'#show-' + person.id">{{ person.name }}</a>
        </div>
    </div>
</template>
