<script setup>
import { onMounted, ref } from 'vue';

defineProps({
    modelValue: {
        type: File,
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
    <input
        type="file"
        class="border-gray-300 bg-indigo-900 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
        @input="$emit('update:modelValue', $event.target.files[0])"
        ref="input"
    />
</template>
