<script setup>
import Plus from "@/Components/svg/Plus.vue";
import Minus from "@/Components/svg/Minus.vue";
const props = defineProps({
    updateCharacter: {
        type: Function,
        required: true,
    },
    modelValue: {
        type: [Number, String],
        required: false,
    }
})

const emit = defineEmits(['update:modelValue']);

</script>
<template>
<li class="flex justify-between">
    <div>
        Возраст: {{ $store.state.character.age }}
    </div>
    <div class="flex">
        <Minus class="cursor-pointer"  @click="$emit('update:modelValue', (modelValue - 1)); updateCharacter()"/>
        <Plus class="mr-1 cursor-pointer"  @click="$emit('update:modelValue', (modelValue + 1)); updateCharacter()"/>
    </div>
</li>
</template>
