<script setup>
import { onMounted, ref } from 'vue';

defineProps({
    modelValue: {
        type: String,
        required: true,
    },
});

defineEmits(['update:modelValue']);

const input = ref(null);

onMounted(() => {
    if (input.value.hasAttribute('autofocus')) {
        input.value.focus();
    }
    contentHeight();
});

const contentHeight = () => {
    input.value.style.height = "0";
    input.value.style.height = (input.value.scrollHeight + 20) + "px"
}

defineExpose({ focus: () => input.value.focus() });
</script>

<template>
    <textarea
        class="border-gray-400 bg-gray-700 focus:border-gray-950 focus:ring-gray-950 rounded-md shadow-sm"
        @input="$emit('update:modelValue', $event.target.value)"
        ref="input"
        @keyup="contentHeight()"
    >{{modelValue}}</textarea>
</template>
