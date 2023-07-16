<script setup>
const props = defineProps({
    title: {
        type: String,
        required: true,
    },
    value: {
        required: true,
    }
})
</script>
<template>
    <div>
        <span class="font-bold">{{ title }}:</span> {{ value }}
    </div>
</template>

