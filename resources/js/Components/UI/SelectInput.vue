<script setup>
import { onMounted, ref } from 'vue';

defineProps({
    modelValue: {
        type: Number,
        required: true,
    },
});

defineEmits(['update:modelValue']);

const input = ref(null);

onMounted(() => {
    if (input.value.hasAttribute('autofocus')) {
        input.value.focus();
    }
});

defineExpose({ focus: () => input.value.focus() });
</script>

<template>
    <select class="border-gray-400 bg-gray-700 focus:border-gray-950 focus:ring-gray-950 rounded-md shadow-sm"
            @input="$emit('update:modelValue', $event.target.value)"
            :value="modelValue"
            ref="input"
    >
        <slot/>
    </select>
</template>
