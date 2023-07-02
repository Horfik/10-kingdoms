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
        <div class="underline text-gray-200 text-xl font-bold mb-2">
            <a :href="'#show-' + kingdom.id">{{ kingdom.name }}</a>
        </div>
    </div>
</template>

