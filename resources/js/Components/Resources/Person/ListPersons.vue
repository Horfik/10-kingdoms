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
        <div class="underline text-gray-200 text-xl font-bold ">
            <a :href="'#show-' + person.id">{{ person.name }}</a>
        </div>
    </div>
</template>
