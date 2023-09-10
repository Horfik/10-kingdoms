<script setup>

const props = defineProps({
    mechanic: {
        type: Object,
        required: true,
    }
});
</script>
<template>
    <div class="mb-4 text-2xl font-bold text-yellow-300">
        {{ mechanic.name }}
    </div>
    <div class="text-xl whitespace-pre-line">
        {{ mechanic.description }}
    </div>
</template>
