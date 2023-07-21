<script setup>
defineProps({
    title: {
        type: String,
        required: true
    }
})
import Circle from '@/Components/svg/Circle.vue';
</script>
<template>
    <div class="flex flex-wrap items-center justify-between border-b border-gray-300">
        <div class="font-semibold">
            {{ title }}
        </div>
        <div class="flex gap-1">
            <Circle width="12" fill="none"/>
            <Circle width="12" fill="none"/>
            <Circle width="12" fill="none"/>
            <Circle width="12" fill="none"/>
            <Circle width="12" fill="none"/>
        </div>
    </div>
</template>
