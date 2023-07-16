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
    <div class="flex gap-1 text-xl">
        <div class="font-bold">
            {{ title }}:
        </div>
        <div class="flex-1 border-b border-gray-900">
            {{ value }}
        </div>
    </div>
</template>

